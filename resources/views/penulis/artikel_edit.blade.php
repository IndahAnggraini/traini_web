
@extends('layouts.lay_penulis')

@section('judul', 'Tulis Artikel')

@section('menu_artikel', 'active')
@section('menu_sub_tulis', 'active')

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
            <form v-for = "(data,index) in list_form">
              <div class="card-body">
                <div class="form-group">
                  <label>Judul</label>
                  {{-- v-model digunakan pada inputan, utk merubah variabel --}}
                  <input type="text" class="form-control" placeholder="Enter Judul" v-model="data.judul">
                </div>

                <div class="form-group">
                    <label >Pilih Kategori</label>
                    <select class="form-control" v-model="data.category_id">
                        <option value="">Pilih Kategori</option>
                        <option value="1">Edukasi</option>
                        <option value="2">Covid</option>
                    </select>
                  </div>

                <div class="form-group">
                  <label for="exampleInputFile">Gambar</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                </div>


                    <div class="form-group">
                      <label>Sumber</label>
                      <input type="text" class="form-control" placeholder="Enter Sumber" v-model="data.sumber">
                    </div>

                    <div class="form-group">
                        <label>Isi</label>
                        <textarea name="" class="form-control" cols="30" rows="10" v-model="data.isi"></textarea>
                    </div>

                      <div class="form-group">
                          <label >Pilih Status</label>
                        <select class="form-control" v-model="data.status">
                            <option value="">Pilih Status</option>
                            <option value="draft">Draft</option>
                            <option value="publish">Publish</option>
                        </select>
                      </div>

                      <div class="form-group" >
                        <label>Tanggal terbit</label>
                        <input type="date" class="form-control" placeholder="Tanggal" v-model="data.tgl_terbit">
                    </div>


                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
              </div>
              <!-- /.card-body -->

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
const id_artikel = {{ $id }};

const App = {
    data() {
        return {
            list_form : ''

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
            axios.get('/semua-artikel-edit-fetch/'+id_artikel)
                .then(r => {
                    this.list_form=r.data;
                    console.log(this.list_form);
                });
        },
        editData(){
            console.log("masuk edit");

            let formData = new FormData();
            formData.append('edit_form', JSON.stringify(this.list_form));

            //axios utk post dari route
            axios.post('/editArtikel/submit', formData)
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
