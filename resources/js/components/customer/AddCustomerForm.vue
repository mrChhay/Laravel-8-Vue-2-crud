<template>
    <div class="container-fluid">
        <h3 class="text-center">Add Customer</h3>
        <div class="row">
            <form @submit.prevent="addPost">
                    <div class="col-sm-4">
                         <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" v-model="customer.first_name">
                        </div>
                    </div>
                    <div class="col-sm-4">
                          <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" v-model="customer.last_name">
                        </div>
                    </div>
                    <div class="col-sm-4">
                          <div class="form-group">
                            <label>Gender</label>
                            <select class="form-select" v-model="customer.gender" aria-label="Default select example">
                                <option selected>Choose</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                          </select>
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                          <div class="form-group">
                            <label>Date Of birth</label>
                            <input type="date" class="form-control" v-model="customer.dob">
                        </div>
                    </div>
                    <div class="col-sm-4">
                          <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" v-model="customer.phone_number">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" v-model="customer.address">
                        </div>
                    </div>
                    <div class="col-sm-4">
                         <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" v-model="customer.email">
                        </div>
                    </div>
                
                <button type="submit" class="btn btn-primary mt-2">Add Customer</button>

            </form>         
        </div>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                customer: {}
            }
        },
        methods: {
            addPost() {
 
                this.axios
                    .post('admin-api/add', this.customer)
                    .then(response => (
                        this.$router.push({name: 'home'})
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>