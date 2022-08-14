
import CustomerList from './components/customer/CustomerList.vue';
import AddCustomerForm from './components/customer/AddCustomerForm.vue';
import EditCustomer from './components/customer/EditCustomer.vue';

export const routes = [
    {
        name: 'home', path:'/', component: CustomerList
    },
    {
        name: 'add', path:'/add', component: AddCustomerForm
    },
    {
        name: 'edit', path:'/edit/:id?', component: EditCustomer, props:true
    },
]