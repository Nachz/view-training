<template>
    <div>
      <h2>All Cars</h2>
      <ul>
        <li v-for="car in cars" :key="car.id">
          <p><strong>Brand:</strong> {{ car.brand }}</p>
          <p><strong>Model:</strong> {{ car.model }}</p>
          
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        cars: [], 
      };
    },
  
    mounted() {
      
      this.fetchAllCars();
    },
  
    methods: {
      fetchAllCars() {
        
      },
    },
  };
  </script>