<template lang="html">
    <div class="chat-message">
        <p>{{ message.message }}</p>
        <small>
            {{ message.user.name }}
            <small class="pull-right">{{ message.created_at}}</small>
        </small>
    </div>
</template>

<script>
    export default{
        props: ['message']
    }
</script>

<style lang="css">
    .chat-message{
        padding: 1rem;
    }
    .chat-message > p {
        margin-bottom: .5rem;
    }
</style>