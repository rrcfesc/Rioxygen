const Home = () => import('./components/Home')

export const routes = [
  {
    name: 'home',
    path: '/',
    component: Home
  }
];
// ,
// {
//   name: 'login',
//       path: '/login',
//     component: Login
// }