<template lang="html">
    <div class="chat-composer">
        <input type="text" placeholder="Start typing a new message..." v-model="messageText" v-on:keyup.enter="sendMessage"/>
        <button class="btn btn-primary" @click="sendMessage">Send</button>

    </div>
</template>

<script>
    var d = new Date();
    var date = "";
    date += d.getFullYear()+"-"+('0'+(d.getMonth()+1)).slice(-2)+"-"+d.getDate()+" "+d.getHours()+":"+('0'+(d.getMinutes()+1)).slice(-2)+":"+('0'+(d.getSeconds()+1)).slice(-2);

    export default{
        props:['curr_name','curr_surname'],
        data(){
            return {
                messageText: ''
            }
        },
        methods:{
            sendMessage(){
                this.$emit('messagesent', {
                    message: this.messageText,
                    created_at:date,
                    user:{
                        name:this.curr_name,
                        surname:this.curr_surname
                    }
                });
                // console.log(this.messageText);
                this.messageText = '';
            }
        }
    }
</script>

<style lang="css">

    .chat-composer{
        display: flex;
    }

    .chat-composer input{
        flex: 1 auto;
        padding: .5rem 1rem;
    }

    .chat-composer button{
        border-radius:0;
    }

</style>