<template>
    <div>
        <h2>Clothing Items</h2>
        <ul>
            <li v-for="item in items" :key="item.id">
                {{ item.name }} - {{ item.category }}
                <button @click="deleteItem(item.id)">Delete</button>
            </li>
        </ul>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            items: [],
        };
    },
    async created() {
        await this.fetchItems();
    },
    methods: {
        async fetchItems() {
            const response = await axios.get('/clothing-items');
            this.items = response.data;
        },
        async deleteItem(id) {
            await axios.delete(`/clothing-items/${id}`);
            await this.fetchItems();
        },
    },
};
</script>