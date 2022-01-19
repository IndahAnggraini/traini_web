
@extends('layouts.lay_penulis')

@section('judul', 'Tulis Artikel')

{{-- utk mengaktifkan tulisan --}}
@section('menu_artikel', 'active')
@section('menu_sub_semua', 'active')

@section('konten')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Striped Full Width Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <table class="table table-striped">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>Judul</th>
            <th>Sumber</th>
            <th>Isi</th>
            <th>Status</th>
            <th>Tanggal Terbit</th>
            <th>View</th>
            <th>Gambar</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            {{-- utk perulangan atau looping dri DB --}}
          <tr v-for="(data,index) in list_berita">
            <td>@{{ index+1 }}.</td>
            <td>@{{ data.judul }}</td>
            <td>@{{ data.sumber }}</td>
            <td>@{{ data.isi }}</td>
            <td>@{{ data.status }}</td>
            <td>@{{ data.tgl_terbit }}</td>
            <td>@{{ data.view }}</td>
            <td><img :src="data.gambar" width="150"></td>
            <td>
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        Action
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <button class="dropdown-item" href="#" @click="editBerita(data.id)">Edit</button>
                      <button class="dropdown-item" href="#" @click="deleteBerita(data.id)">Delete</button>
                      <div class="dropdown-divider"></div>
                      <button class="dropdown-item" href="#">Publish</button>
                      <button class="dropdown-item" href="#">Draft</button>
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
            list_berita:''

        }
    },
    mounted() {
        this.viewData();
    },
    unmounted() {

    },
    methods: {
        viewData(){
            axios.get('/semua-artikel-fetch')
                .then(r => {
                    console.log("sukses");
                    this.list_berita = r.data;
                    console.log(this.list_berita);
                });
        },
        deleteBerita(item){
            console.log("berhasil masuk delete");
            console.log(item);

            axios.get('/semua-artikel-hapus/'+item)
                .then(r => {
                    console.log(r.data);
                    this.viewData();
                });
        },
        editBerita(item){
            window.location.href="/semua-artikel-edit/"+item;

        }
    }
}

Vue.createApp(App).mount('#app');
</script>
@endsection




