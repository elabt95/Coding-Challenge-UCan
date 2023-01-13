<template>
    <div class="row mb-5">
        <h3 class="col-10 text-primary text-center mt-5 mb-5">Product List</h3>

        <div
            class="col-3 p-0 shadow-lg mb-5 bg-body rounded mx-3"
            style="border: 0px solid grey"
            v-for="(prod, index) in productsVueArray"
            :key="index"
        >
            <div class="col-12">
                <img
                    :src="prod.image"
                    style="width: 100%; height: 240px; border: 1px solid grey"
                />
            </div>
            <div class="col-12 p-3">
                <h5 class="text-primary">{{ prod.name }}</h5>
                <p class="text-justify">{{ prod.description }}</p>
                <h5 class="text-primary">{{ prod.price }}DH</h5>

                <span
                    class="badge bg-primary"
                    v-for="(category, index) in prod.categories"
                    :key="index"
                    >{{ category.name }}</span
                >
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data: function () {
        return {
            prods: this.products,
            productsVueArray: [],
            idfiltreselected: "0",
        };
    },
    methods: {},
    created() {
        //make the array empty
        this.productsVueArray.splice(0);
        //show all products
        console.log(this.products);
        //add products in productsvuearray
        this.products.forEach((element) => {
            this.productsVueArray.push(element);
        });
        //show products sorted by date
        this.productsVueArray.sort((a, b) => (a.id < b.id ? 1 : -1));
    },
    props: ["products", "categoriesv"],
    mounted() {
        console.log("Component mounted.");
    },
    computed: {},
};
</script>
