<template>
        <tr >
            <td>{{ index + 1 }}</td>
            <td>{{ user.name }}</td>
            <td>{{ user.email}}</td>
            <td>{{ formatDate(user.created_at)}}</td>
            <td>{{ user.role}}</td>
            <td>
                <a @click.prevent="editUser(user)" href="#"><i class="fa fa-edit"></i></a>
                <a @click.prevent="confirmUserDeletion(user)" href="#"><i class="fa fa-trash text-danger ml-2"></i></a>
            </td>
        </tr>
    <!-- Modal Delete -->
    <div class="modal fade" id="deleteUserModal" data-backdrop="static" tabindex="-1" role="dialog"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        <span > Delete User Record </span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Are you sure you want to delete this user ? </h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button  @click.prevent="deleteUser" type="button"  class="btn btn-danger">Delete Record</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { formatDate} from "../../helper.js";
import axios from "axios";
import {ref} from "vue";
import { useToastr } from '../../toastr.js'


defineProps({
    user: Object,
    index : Number
});
const emit = defineEmits(['userDeleted' ,'editUser']);

const userIdBeingDeleted  = ref(null)
const toastr        = useToastr();

const editUser = (user) => {
    emit('editUser', user)
}

/**Show Modal*/
const  confirmUserDeletion = (user) => {
    console.log(user);
    userIdBeingDeleted.value = user.id;
    $('#deleteUserModal').modal('show');
}

const deleteUser = () =>{
    axios.delete(`/api/users/${userIdBeingDeleted.value}`)
        .then(() =>{

            $('#deleteUserModal').modal('hide');

            emit('userDeleted', userIdBeingDeleted.value )
            //users.value = users.value.filter(user => user.id !== userIdBeingDeleted.value);
            toastr.success('User deleted successfully')
        })
}
</script>

<style scoped>

</style>
