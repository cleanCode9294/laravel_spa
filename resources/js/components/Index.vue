<template>
    <div id="nav">
        <router-link :to="{ name: 'person.index' }">People</router-link> |
        <router-link :to="{ name: 'person.create' }">Add</router-link> |
    </div>
    <router-view/>
</template>

<script>
export default {
    name: "Index"
}
</script>

<style scoped>

</style>
