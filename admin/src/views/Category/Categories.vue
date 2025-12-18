<template>
  <div class="flex items-center justify-between mb-3 p-2">
    <RouterLink :to="{ name: 'app.categories.create' }" class="py-2 px-4 border border-transparent text-sm font-medium
      rounded-md text-white bg-indigo-600 hover:bg-indigo-700
      focus:outline-none focus:ring-2 focus:ring-offset-2
      focus:ring-indigo-500">
      Add new Category
    </RouterLink>
  </div>
  <CategoriesTable @click-edit="EditCategory"></CategoriesTable>
</template>

<script setup>
import { ref } from 'vue';
import store from '../../store';
import CategoriesTable from "./CategoriesTable.vue";

const categoryModel = ref({
  id: '',
  type: '',
  name: '',
  image: '',
})

function EditCategory(category) {
  store.dispatch('getCategory', category.id)
    .then(({ data }) => {
      categoryModel.value = data
    })
}
</script>

<style scoped></style>
