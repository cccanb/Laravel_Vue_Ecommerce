<template>
    <div>
        <button @click.prevent="addPost" type="button" class="btn btn-primary">
            Create Post
        </button>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Text</th>
                    <th scope="col">Author</th>
                    <th scope="col">Created</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="post in posts">
                    <td>{{ post.id }}</td>
                    <td>
                        <router-link
                            :to="{ name: 'post.show', params: { id: post.id } }"
                            >{{ post.title }}</router-link
                        >
                    </td>
                    <td>{{ post.text }}</td>
                    <td>{{ post.author }}</td>
                    <td>{{ post.created_at }}</td>
                    <td>
                        <router-link
                            :to="{ name: 'post.edit', params: { id: post.id } }"
                            >Edit</router-link
                        >
                    </td>
                    <td>
                        <button
                            @click.prevent="deletePost(post.id)"
                            class="btn btn-danger"
                        >
                            Delete
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
export default {
    name: "PostIndexComponent",
    data() {
        return {
            posts: null,
        };
    },
    mounted() {
        this.getPosts();
    },
    methods: {
        getPosts() {
            axios.get("/api/post").then((res) => {
                this.posts = res.data.data;
            });
        },

        deletePost(id) {
            axios.delete(`/api/post/${id}`).then((res) => {
                this.getPosts();
            });
        },
        addPost() {
            this.$router.push({ name: "post.create" });
        },
    },
};
</script>
<style scoped></style>
