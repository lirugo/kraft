<template lang="html">
    <div class="chat-composer">
        <input type="text" placeholder="Start typing a new message..." v-model="messageText" @keyup.enter="sendMessage"/>
        <button class="btn btn-primary" @click="sendMessage">Send</button>
    </div>
</template>

<script>
    export default{
        props:['curr_name'],
        data(){
            return {
                messageText: ''
            }
        },
        methods:{
            sendMessage(){
                this.$emit('messagesent', {
                    message: this.messageText,
                    user: {
                        name:this.curr_name,
                    }
                });
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