<template>
    <div>
      <p>{{ greeting }}</p>
      <button @click="updateGreeting">Update Greeting</button>
    </div>
  </template>
  
  <script setup>
  import { ref, computed } from 'vue';
  
  // Define a reactive variable using ref()
  const greeting = ref('Hello world');
  
  // Define a computed property using computed()
  const updatedGreeting = computed(() => greeting.value + ' (Updated)');
  
  // Define a method to update the greeting
  function updateGreeting() {
    greeting.value = 'Hello Vue!';
  }
  </script>
  