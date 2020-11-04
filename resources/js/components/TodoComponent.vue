<template>
  <div class="w-25">
    <form>
      <div class="input-group mb-3 w-100">
        <input v-model="form.title"  type="text" class="form-control form-control-lg" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
          <button class="btn btn-success" type="submit" id="button-addon2"> Add this to your list</button>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
export default {
  data(){
    return{
      form: new Form((
          title: '',
          ))

    }
  },
  mounted() {

  }
}
</script>

<!-- Fatih Bey bu kısma haftaya geç dedi. Say: 21/10/2020 -(Çrş) -->