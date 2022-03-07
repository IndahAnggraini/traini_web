
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
      <table id="example" class="table table-striped table-bordered">
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

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/assets/css/toastr.min.css">
<link rel="stylesheet" href="/assets/css/slick-loader.min.css">
@endsection

@section('script')
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/js/toastr.min.js"></script>
<script src="/assets/js/slick-loader.min.js"></script>
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
            SlickLoader.enable();
            $('#example').DataTable().destroy();
            axios.get('/semua-artikel-fetch')
                .then(r => {
                    console.log("sukses");
                    this.list_berita = r.data;
                    setTimeout(function() {
                        $('#example').DataTable();
                        SlickLoader.disable();
                        toastr.success('Have fun storming the castle!', 'Sukses');
                    }, 3000);
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
                    toastr.warning('Have fun storming the castle!', 'Warning');
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




