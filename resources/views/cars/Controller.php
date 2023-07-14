<template>
    <div>
      <h2>Add Card</h2>
      <form @submit.prevent="submitForm">
        <div>
          <label for="brand">Brand:</label>
          <input type="text" id="brand" v-model="card.brand" required>
        </div>
        <div>
          <label for="model">Model:</label>
          <input type="text" id="model" v-model="card.model" required>
        </div>
        <div>
          <label for="date">Date Purchased:</label>
          <input type="date" id="date" v-model="card.datePurchased" required>
        </div>
        <div>
          <label for="prevOwner">Previous Owner:</label>
          <input type="text" id="prevOwner" v-model="card.previousOwner" required>
        </div>
        <div>
          <label for="contact">Contact Number:</label>
          <input type="text" id="contact" v-model="card.contactNumber" required>
        </div>
        <div>
          <label for="status">Status:</label>
          <input type="text" id="status" v-model="card.status" required>
        </div>
        <div>
          <label for="firstName">First Name:</label>
          <input type="text" id="firstName" v-model="card.ownership.firstName" required>
        </div>
        <div>
          <label for="middleName">Middle Name:</label>
          <input type="text" id="middleName" v-model="card.ownership.middleName" required>
        </div>
        <div>
          <label for="lastName">Last Name:</label>
          <input type="text" id="lastName" v-model="card.ownership.lastName" required>
        </div>
        <button type="submit">Add Card</button>
      </form>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        card: {
          brand: '',
          model: '',
          datePurchased: '',
          previousOwner: '',
          contactNumber: '',
          status: '',
          ownership: {
            firstName: '',
            middleName: '',
            lastName: ''
          }
        }
      };
    },
    methods: {
      submitForm() {
        console.log('Adding card:', this.card);
        // Add your logic to submit the form data or perform any other actions here
      }
    }
  };
  </script>