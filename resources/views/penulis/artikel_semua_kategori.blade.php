
@extends('layouts.lay_penulis')

@section('judul', 'Semua Kategori')

@section('menu_kategori', 'active')
@section('menu_sub_kategori', 'active')

@section('konten')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Menampilkan Semua Kategori</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <table class="table table-striped">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>Kategori</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            {{-- utk perulangan atau looping dri DB --}}
          <tr v-for="(data,index) in list_semua">
            <td>@{{ index+1 }}.</td>
            <td>@{{ data.kategori }}</td>
            <td>
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        Action
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <button class="dropdown-item" href="#" @click="editCategory(data.id)">Edit</button>
                      <button class="dropdown-item" href="#" @click="deleteCategory(data.id)">Delete</button>
                    </div>
                  </div>
            </td>

          </tr>


        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection

@section('script')
<script>
const App = {
    data() {
        return {
            list_semua:''
        }
    },
    mounted() {
        this.viewData();
    },
    unmounted() {

    },
    methods: {
        viewData(){
            axios.get('/getsemuakategori')
                .then(r => {
                    console.log("sukses");
                    this.list_semua = r.data;
                    console.log(this.list_semua);
                });
        },
        deleteCategory(item){
            console.log("berhasil masuk delete");
            console.log(item);

            axios.get('/kategori-hapus/'+item)
                .then(r => {
                    console.log(r.data);
                    this.viewData();
                });
        },
        editCategory(item){
            window.location.href="/kategori-edit/"+item;

        }
    }
}

Vue.createApp(App).mount('#app');
</script>
@endsection




