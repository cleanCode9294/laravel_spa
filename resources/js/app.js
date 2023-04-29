import './bootstrap';
import { createApp } from 'vue';
import router from './router'
import Index from './components/Index.vue'

const Home = { template: '<div>Home</div>' }
const About = { template: '<div>About</div>' }

// 2. Define some routes
// Each route should map to a component.
// We'll talk about nested routes later.
const routes = [
    { path: '/', component: Home },
    { path: '/about', component: About },
]

const app = createApp(Index);

app.use(router)
app.mount('#app');
