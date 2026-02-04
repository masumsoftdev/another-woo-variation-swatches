<template>
    <div class="avsfw-tabs-container">
        <router-link :to="{name: 'Test'}" :class="{active: $route.path === '/'}">Test</router-link>
    </div>
</template>