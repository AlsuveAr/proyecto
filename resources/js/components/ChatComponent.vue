<template>
    <div class="chat-c" id="chat">
    	
    	<chat-info></chat-info>
	
    	<chat :room="room" :user="user"></chat>
	
    </div>
</template>

<script>
    export default {
    	props: ['room', 'user'],

        mounted() {
            //console.log(this.room)
        }
    };
</script>

<style lang="scss">
.chat-info {
	position: absolute;
	top: 9.5vh;
	height: 90.5vh;
	max-height: 90.5vh;
	width: 25vw;
	max-width: 25vw;
	z-index: 0;
	//background-color: green;
}

.chat {
	position: absolute;
	top: 9.5vh;
	left: 25vw;
	height: 90.5vh;
	max-height: 90.5vh;
	width: 75vw;
	max-width: 75vw;
	z-index: 0;
	background-color: #f5f5f5;
}
</style>
