<template lang="">
    <div>
        <h4>Edit</h4>
        <form @submit.prevent="submitForm">
        <div class="grid grid-2 gap-2">
            <div>
                label for="">First Name</label>
                <input type="text" v-model="fname"/>
            </div>
            <div>
                label for="">Middle Name</label>
                <input type="text" v-model="mname"/>
            </div>
            <div>
                label for="">Last Name</label>
                <input type="text" v-model="lname"/>
            </div>
            <div>
        <button type="submit">Submit</button>
        <button @click.event="$emit('cancelEdit')">Cancel</button>
            </div>
        </div>
    </form>
</div>
</template>
</script>
import axios from "axios"

export default {
    props:{"name"},
    data(){
        return {
            id:0,
            fname"",
            mname"",
            lname"",
        };
    },
    mounted() {
    this.id = this.name.id;
    this.fname = this.name.fname;
    this.fname = this.name.mname;
    this.fname = this.name.lname;
    }
    methods: {
      submitForm(){
        let{id, fname, mname, lname} = this;
        alert("Submitting");
        axios
            .post("submit-name", {id, fname, mname, lname})
            .then({data})=> {
              alert("successful");
              this.id = o;
              this.fname = "",
              this.mname = "",
              this.lname = "",
              this.$emit("submitted");
            ]}
      },
      submit formAlt() {
        alert("Submitting");
        axios
        .post("/submit-name",)
          id:this.id,
          fname:this.fname, 
          mname:this.mname, 
          lname:this.lname, 
      })
      .then(({data})) => {
        alert("successful");
              this.id = o;
              this.fname = "",
              this.mname = "",
              this.lname = "",
              this.$emit("submitted");
       }}
     },
    }
 }
 </script>
 <style lang=""

