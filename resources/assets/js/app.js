
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('chat-message', require('./components/ChatMessage.vue'));
Vue.component('chat-log', require('./components/ChatLog.vue'));
Vue.component('chat-composer', require('./components/ChatComposer.vue'));

//Chat object
Vue.component('chat-object-message', require('./components/chat/object/Message.vue'));
Vue.component('chat-object-log', require('./components/chat/object/Log.vue'));
Vue.component('chat-object-composer', require('./components/chat/object/Composer.vue'));

if(document.getElementById('object_id'))
    var objectId = document.getElementById('object_id').value;
else
    console.log('Error with broadcast becouse dont know what channel must listen');

const app = new Vue({
    el: '#app',
    data:{
        messages:[],
        msgsobject:[],
        usersInRoom: [],
    },
    methods:{
        addMessage(message){
            // Add to existing messages
            this.messages.push(message);
            // Persist to the database etc
            axios.post('/messages', message).then(response => {

            });
            console.log(message);
        },
        addObjectMessage(message){
            // Add to existing messages
            this.msgsobject.push(message);
            // Persist to the database etc
            axios.post('/object/'+objectId+'/messages', message, objectId).then(response => {

            });
            // console.log(/object/:objectId/messages);
        }
    },
    created(){
        axios.get('/messages').then(response => {
            this.messages = response.data;
        });

        axios.get('/object/'+objectId+'/messages').then(response => {
            this.msgsobject = response.data;
            // console.log(response);
        });

        Echo.join('chatroom')
            .here((users) => {
                this.usersInRoom = users;
            })
            .joining((user) => {
                this.usersInRoom.push(user);
            })
            .leaving((user) => {
                this.usersInRoom = this.usersInRoom.filter( u => u !== user);
            })
            .listen('MsgPosted', (e) => {
               // Handle event
               //  console.log(e);
                this.messages.push({
                   message: e.message.message,
                   user: e.user
                });
            });
        Echo.private('chatobject.'+objectId)
            .listen('MsgObjectPosted', (e) => {
                // Handle event
                 console.log(e);
                this.msgsobject.push({
                    message: e.message.message,
                    user: e.user
                });
            });

    }
});
