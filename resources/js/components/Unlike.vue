<template>
    <a @click="like" class="text-xs text-gen cursor-pointer">Unlike</a>
</template>
<script>

export default {
    props:['replyid'],
    methods:{
        like(){

            axios.get('/reply/unlike/' + this.replyid).then((response) => {

                 location.reload()
            }).catch((errors)=>{
                console.log(errors);
            }); 
        }
    }
    
}
</script>