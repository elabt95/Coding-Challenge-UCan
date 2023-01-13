<template>
    <div class="row mb-5">
        <h3 class="col-10 text-primary text-center mt-5 mb-5">Product List</h3>
        <div class="col-2"></div>
        <div class="col-2 mb-5">
            <label class="mb-2">Category</label>

            <select
                class="form-select float-left"
                @change="filtreByCat"
                v-model="idcatselected"
            >
                <option value="00">Choose category</option>

                <option
                    v-for="(categoryv, index) in categoriesv"
                    :key="index"
                    :value="categoryv.id"
                    @click="filtreByCat(categoryv.id)"
                >
                    {{ categoryv.name }}
                </option>
            </select>
        </div>
        <div class="col-2"></div>
        <div class="col-4">
            <a
                :href="linkcreate"
                class="btn btn-outline-primary align-center mt-4"
                >Add Product</a
            >
        </div>
        <div class="col-2">
            <label class="mb-2">Sort</label>
            <select
                class="form-select float-right"
                @change="sortByCol"
                v-model="idfiltreselected"
            >
                <option value="0">New to Old</option>
                <option value="1">Low to High Price</option>
                <option value="2">High to Low Price</option>
                <option value="3">Old to New</option>
            </select>
        </div>

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
            idcatselected: "00",
            productsVueArray: [],
            idfiltreselected: "0",
            linkcreate: this.linkadd,
        };
    },
    methods: {
        //filtre By categorie
        filtreByCat() {
            //Category not defined
            if (this.idcatselected === "00") {
                //make the array empty
                this.productsVueArray.splice(0);
                //show all products
                console.log(this.products);
                //add products in productsvuearray
                this.products.forEach((element) => {
                    this.productsVueArray.push(element);
                });
                return this.products;
            } else {
                //make the array empty
                this.productsVueArray.splice(0);
                //add products in productsvuearray filtred by idcategory selected
                this.products.forEach((element) => {
                    element.categories.forEach((item) => {
                        if (item.id === this.idcatselected) {
                            console.log("found" + element.name);
                            this.productsVueArray.push(element);
                        }
                    });
                });
                return this.productsVueArray;
            }
        },
        //sort Product By Column
        sortByCol() {
            //sort Product By date DESC
            if (this.idfiltreselected == "0") {
                this.productsVueArray.sort((a, b) => (a.id < b.id ? 1 : -1));
            }
            //sort Product By Price ASC
            else if (this.idfiltreselected == "1") {
                this.productsVueArray.sort((a, b) =>
                    a.price > b.price ? 1 : -1
                );
            }
            //sort Product By Price DESC
            else if (this.idfiltreselected == "2") {
                this.productsVueArray.sort((a, b) =>
                    a.price < b.price ? 1 : -1
                );
            }
            //sort Product By date ASC
            else if (this.idfiltreselected == "3") {
                this.productsVueArray.sort((a, b) => (a.id > b.id ? 1 : -1));
            }
        },
    },
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
    props: ["products", "categoriesv", "linkadd"],
    mounted() {
        console.log("Component mounted.");
    },
    computed: {},
};
</script>
