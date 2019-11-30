import Dashboard from './components/Dashboard';
import HomeAdmin from './components/admin/HomeAdmin';
import Users from './components/admin/users/Users';
export const routes = [
    { 
        path: '/', 
        component: Dashboard, 
        name: 'Dashboard',
        redirect: {
            name: 'HomeAdmin'
        },
        children: [
            {
                path: 'admin', 
                component: HomeAdmin, 
                name: 'HomeAdmin',
            },
            {
                path: 'users', 
                component: Users, 
                name: 'Users',
            }
        ]
    },
    
]