<template>
    <div>
        <div class="container-flueit">
            <div class="header-text text-center">
                <h3> Customer List</h3>
            </div>
            <div class="content-body">

                <table class="table table-bordered table-responsive text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fist Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Date Of birth</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(cus,index) in customer" :key="index">
                            <td>{{ index+1 }}</td>
                            <td>{{ cus.first_name }}</td>
                            <td>{{ cus.last_name }}</td>
                            <td>
                                <span v-if="cus.gender == 1"> Male</span>
                                <span v-else> Female</span>
                            </td>
                            <td>{{ cus.dob }}</td>
                            <td>{{ cus.phone_number }}</td>
                            <td>{{ cus.email }}</td>
                            <td>{{ cus.address}}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <router-link :to="{name: 'edit', params: { id: cus.id }}" class="btn btn-primary">Edit
                                    </router-link>
                                    <button class="btn btn-danger" @click="deletePost(cus.id)">Delete</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</template>
<script>
    export default {

        data() {
            return {
                customer: []
            }
        },
        created() {
           this.getCustomerData();
        },
        methods: {
            getCustomerData() {
                 this.axios
                    .get('admin-api/customer')
                    .then(response => {
                        this.customer = response.data;
                    });
            },

            deletePost(id) {
                this.axios
                    .delete(`dmin:admin-api/customer/delete/${id}`)
                    .then(response => {
                        let i = this.customer.map(item => item.id).indexOf(id); // find index of your object
                        this.customer.splice(i, 1)
                    });
            }
        }
    }
</script>