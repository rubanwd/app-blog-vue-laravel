<template id="edit-post">
	<div>
		<h3>Edit Post</h3>
		<form v-on:submit.prevent = "updatePost">
			<div class="form-group">
				<label for="edit-title">Title</label>
				<input id="edit-title" v-model="post.title" class="form-control" required />
			</div>
			<div class="form-group">
				<label for="edit-body">Title</label>
				<textarea class="form-control" rows="10" v-model="post.body"></textarea>
			</div>
			<button type="submit" class="btn btn-xs btn-primary">Edit Post</button>
			<router-link class="btn btn-xs btn-warning" v-bind:to="'/'">Cancel</router-link>
		</form>
	</div>
</template>
<script>
	export default {
        data:function(){
        	return {
        		post: {
        			title: '', 
        			body: ''
        		}
        	}
        },
        created: function(){
        	let url = 'http://localhost:8000/posts/' + this.$route.params.id + '/edit';
        	Axios.get(url).then((response) => {
        		this.post = response.data;
        	});
        },
        methods: {
        	updatePost: function() {
	        	let url = 'http://localhost:8000/posts/' + this.$route.params.id;
	        	Axios.patch(url, this.post).then((response) => {
	        		this.$router.push( { name: 'Listposts' } );
	        	});
	        }
        }
    }
</script>