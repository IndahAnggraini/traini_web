
@extends('layouts.lay_penulis')

@section('judul', 'Kategori')

@section('menu_kategori', 'active')
@section('menu_kategoriform', 'active')

@section('konten')
    {{-- tag utk mnjdi responsif --}}
<div class="row" style="display: flex; justify-content: center;">
    <div class="col-md-10">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Quick Example</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="form-group">
                  <label>Kategori</label>
                  <input type="text" class="form-control" placeholder="Enter Kategori" v-model="list_kat.kategori">
                </div>



              <div class="card-footer">
                <button type="button" class="btn btn-primary float-right px-5" @click="save">Submit</button>
              </div>
            </form>
          </div>
    </div>
</div>
@endsection

@section('script')
<script>
const App = {
    data() {
        return {
            list_kat : {
                kategori: '',
            }
        }
    },
    mounted() {

    },
    unmounted() {

    },
    methods: {
        save(){
            console.log("ini save");
            console.log(this.list_kat);

            // javascript ke php, list_form_to_php = utk di panggil di controller,
            // JSON.stringify utk mengambil data brdsrkan objek
            let formData = new FormData();
            formData.append('list_form_to_php', JSON.stringify(this.list_kat));

            //axios utk post dari route
            axios.post('/saveKategori', formData)
                .then(r => {
                    console.log("sukses");
                    console.log(r.data);
                });

        }
    }
}

Vue.createApp(App).mount('#app');
</script>
@endsection
