<template>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form-component @new="addThought"></form-component>
            <hr />

            <thought-component
                v-for="(thought, index) in thoughts"
                :key="thought.id"
                :thought="thought"
                @update="updateThought(index, ...arguments)"
                @delete="deleteThought(index)"
            ></thought-component>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            thoughts: [],
        };
    },
    mounted() {
        axios.get("/thought").then((response) => {
            this.thoughts = response.data;
        });
    },
    methods: {
        addThought(thought) {
            this.thoughts.push(thought);
        },
        updateThought(index, thougth) {
            this.thoughts[index] = thougth;
        },
        deleteThought(index) {
            this.thoughts.splice(index, 1);
        },
    },
};
</script>
