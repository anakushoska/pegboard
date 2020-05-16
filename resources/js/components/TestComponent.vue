<template>



  <select name="LeaveType" @change="onchange()" class="form-control" v-model="key">
    <option value="1">Annual Leave/ Off-Day</option>
    <option value="2">On Demand Leave</option>
  </select>

</template>
<script>
export default {
  el: "#app",
  data: {
    key: "",
  },
  methods: {
  	onchange: function() {
    	console.log(this.key)
      alert(this.key)
    }
  }



}
</script>
