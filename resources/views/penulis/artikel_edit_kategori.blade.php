
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
            <form v-for = "(data,index) in list_kat">
                <div class="card-body">
                  <div class="form-group">
                    <label>Kategori</label>
                    <input type="text" class="form-control" placeholder="Enter Kategori" v-model="data.kategori">
                  </div>

              <div class="card-footer">
                <button type="button" class="btn btn-primary float-right px-5" @click="editData">Submit</button>
              </div>
            </form>
          </div>
    </div>
</div>
@endsection

@section('script')
<script>
const id_category = {{ $id }};

const App = {
    data() {
        return {
            list_kat : ''

        }
    },
    mounted() {
        this.viewData();
    },
    unmounted() {

    },
    methods: {
        viewData(){
            console.log("masuk")
            axios.get('/kategori-edit-fetch/'+id_category)
                .then(r => {
                    this.list_kat=r.data;
                    console.log(this.list_kat);
                });
        },
        editData(){
            console.log("masuk edit");

            let formData = new FormData();
            formData.append('edit_form', JSON.stringify(this.list_kat));

            //axios utk post dari route
            axios.post('/editkategori/submit', formData)
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
