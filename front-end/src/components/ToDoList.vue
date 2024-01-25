<script>
import axios from "axios";
export default {
  name: "ToDoList",
  data() {
    return {
      mushroomTasks: [],
    };
  },

  mounted() {
    axios
      .get(" http://localhost/php-todo-list-json/back-end/mushroomsTask.php")
      .then((res) => {
        this.mushroomTasks = res.data;
      })
      .catch((err) => console.error(err));
  },
};
</script>

<template>
  <h1>Tasks: {{ mushroomTasks.length }}</h1>
  <ul>
    <li v-for="(mushroomTask, index) in mushroomTasks" :key="index">
      {{ mushroomTask.task }} {{ mushroomTask.priority }}
    </li>
  </ul>
</template>

<style scoped></style>
