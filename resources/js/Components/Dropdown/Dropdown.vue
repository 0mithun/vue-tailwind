<template>
    <div>
       <Menu >
           <MenuButton>Options</MenuButton>
           <menu-items class="left-0">
               <menu-item>Account Setting</menu-item>
               <menu-item>Support</menu-item>
               <menu-item>License</menu-item>
               <menu-item>Sign Out</menu-item>
           </menu-items>
       </Menu>
    </div>
</template>

<script>
    import Menu from './Menu.vue'
    import MenuButton from './MenuButton.vue'
    import MenuItem from './MenuItem.vue'
    import MenuItems from './MenuItems.vue'
    export default {
        components: {
            Menu,
            MenuButton,
            MenuItem,
            MenuItems
        }
    }
</script>


<style lang="scss" scoped>

</style>
