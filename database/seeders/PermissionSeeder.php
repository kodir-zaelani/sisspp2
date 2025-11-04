<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         //permission for dashboard
        Permission::create(['name' => 'dashboard.index','guard_name' => 'web']);

         //permission for settings
        Permission::create(['name' => 'settings.index','guard_name' => 'web']);
        Permission::create(['name' => 'settings.create','guard_name' => 'web']);
        Permission::create(['name' => 'settings.edit','guard_name' => 'web']);
        Permission::create(['name' => 'settings.delete','guard_name' => 'web']);

        //permission for testimonial
        Permission::create(['name' => 'testimonial.index','guard_name' => 'web']);
        Permission::create(['name' => 'testimonial.create','guard_name' => 'web']);
        Permission::create(['name' => 'testimonial.edit','guard_name' => 'web']);
        Permission::create(['name' => 'testimonial.delete','guard_name' => 'web']);

        //permission for greetings
        Permission::create(['name' => 'greetings.index','guard_name' => 'web']);
        Permission::create(['name' => 'greetings.create','guard_name' => 'web']);
        Permission::create(['name' => 'greetings.edit','guard_name' => 'web']);
        Permission::create(['name' => 'greetings.delete','guard_name' => 'web']);

        //permission for editorial
        Permission::create(['name' => 'editorial.index','guard_name' => 'web']);
        Permission::create(['name' => 'editorial.create','guard_name' => 'web']);
        Permission::create(['name' => 'editorial.edit','guard_name' => 'web']);
        Permission::create(['name' => 'editorial.delete','guard_name' => 'web']);

        //permission for menu
        Permission::create(['name' => 'menu.index','guard_name' => 'web']);
        Permission::create(['name' => 'menu.create','guard_name' => 'web']);
        Permission::create(['name' => 'menu.edit','guard_name' => 'web']);
        Permission::create(['name' => 'menu.delete','guard_name' => 'web']);

        //permission for socialmedia
        Permission::create(['name' => 'socialmedia.index','guard_name' => 'web']);
        Permission::create(['name' => 'socialmedia.create','guard_name' => 'web']);
        Permission::create(['name' => 'socialmedia.edit','guard_name' => 'web']);
        Permission::create(['name' => 'socialmedia.delete','guard_name' => 'web']);

        //permission for categories
        Permission::create(['name' => 'categoryposts.index','guard_name' => 'web']);
        Permission::create(['name' => 'categoryposts.create','guard_name' => 'web']);
        Permission::create(['name' => 'categoryposts.edit','guard_name' => 'web']);
        Permission::create(['name' => 'categoryposts.delete','guard_name' => 'web']);

        //permission for postsubcategory
        Permission::create(['name' => 'postsubcategory.index','guard_name' => 'web']);
        Permission::create(['name' => 'postsubcategory.create','guard_name' => 'web']);
        Permission::create(['name' => 'postsubcategory.edit','guard_name' => 'web']);
        Permission::create(['name' => 'postsubcategory.delete','guard_name' => 'web']);

        //permission for setarticles
        Permission::create(['name' => 'setarticles.index','guard_name' => 'web']);
        Permission::create(['name' => 'setarticles.create','guard_name' => 'web']);
        Permission::create(['name' => 'setarticles.edit','guard_name' => 'web']);
        Permission::create(['name' => 'setarticles.delete','guard_name' => 'web']);


        //permission for tags
        Permission::create(['name' => 'tags.index','guard_name' => 'web']);
        Permission::create(['name' => 'tags.create','guard_name' => 'web']);
        Permission::create(['name' => 'tags.edit','guard_name' => 'web']);
        Permission::create(['name' => 'tags.delete','guard_name' => 'web']);

        //permission for posts
        Permission::create(['name' => 'posts.index','guard_name' => 'web']);
        Permission::create(['name' => 'posts.create','guard_name' => 'web']);
        Permission::create(['name' => 'posts.edit','guard_name' => 'web']);
        Permission::create(['name' => 'posts.delete','guard_name' => 'web']);

        //permission for pagecategories
        Permission::create(['name' => 'pagecategories.index','guard_name' => 'web']);
        Permission::create(['name' => 'pagecategories.create','guard_name' => 'web']);
        Permission::create(['name' => 'pagecategories.edit','guard_name' => 'web']);
        Permission::create(['name' => 'pagecategories.delete','guard_name' => 'web']);

        //permission for pages
        Permission::create(['name' => 'pages.index','guard_name' => 'web']);
        Permission::create(['name' => 'pages.create','guard_name' => 'web']);
        Permission::create(['name' => 'pages.edit','guard_name' => 'web']);
        Permission::create(['name' => 'pages.delete','guard_name' => 'web']);

        //permission for videocategories
        Permission::create(['name' => 'videocategories.index','guard_name' => 'web']);
        Permission::create(['name' => 'videocategories.create','guard_name' => 'web']);
        Permission::create(['name' => 'videocategories.edit','guard_name' => 'web']);
        Permission::create(['name' => 'videocategories.delete','guard_name' => 'web']);

        //permission for video
        Permission::create(['name' => 'video.index','guard_name' => 'web']);
        Permission::create(['name' => 'video.create','guard_name' => 'web']);
        Permission::create(['name' => 'video.edit','guard_name' => 'web']);
        Permission::create(['name' => 'video.delete','guard_name' => 'web']);

        //permission for albums
        Permission::create(['name' => 'albums.index','guard_name' => 'web']);
        Permission::create(['name' => 'albums.create','guard_name' => 'web']);
        Permission::create(['name' => 'albums.edit','guard_name' => 'web']);
        Permission::create(['name' => 'albums.delete','guard_name' => 'web']);

        //permission for photos
        Permission::create(['name' => 'photos.index','guard_name' => 'web']);
        Permission::create(['name' => 'photos.create','guard_name' => 'web']);
        Permission::create(['name' => 'photos.edit','guard_name' => 'web']);
        Permission::create(['name' => 'photos.delete','guard_name' => 'web']);

        //permission for sliders
        Permission::create(['name' => 'sliders.index','guard_name' => 'web']);
        Permission::create(['name' => 'sliders.create','guard_name' => 'web']);
        Permission::create(['name' => 'sliders.edit','guard_name' => 'web']);
        Permission::create(['name' => 'sliders.delete','guard_name' => 'web']);

        //permission for roles
        Permission::create(['name' => 'roles.index','guard_name' => 'web']);
        Permission::create(['name' => 'roles.create','guard_name' => 'web']);
        Permission::create(['name' => 'roles.edit','guard_name' => 'web']);
        Permission::create(['name' => 'roles.delete','guard_name' => 'web']);

        //permission for permissions
        Permission::create(['name' => 'permissions.index','guard_name' => 'web']);
        Permission::create(['name' => 'permissions.create','guard_name' => 'web']);
        Permission::create(['name' => 'permissions.edit','guard_name' => 'web']);
        Permission::create(['name' => 'permissions.delete','guard_name' => 'web']);

        //permission for users
        Permission::create(['name' => 'users.index','guard_name' => 'web']);
        Permission::create(['name' => 'users.create','guard_name' => 'web']);
        Permission::create(['name' => 'users.edit','guard_name' => 'web']);
        Permission::create(['name' => 'users.delete','guard_name' => 'web']);

        //permission for advertisements
        Permission::create(['name' => 'advertisements.index','guard_name' => 'web']);
        Permission::create(['name' => 'advertisements.create','guard_name' => 'web']);
        Permission::create(['name' => 'advertisements.edit','guard_name' => 'web']);
        Permission::create(['name' => 'advertisements.delete','guard_name' => 'web']);

        //permission for downloadcategories
        Permission::create(['name' => 'downloadcategories.index','guard_name' => 'web']);
        Permission::create(['name' => 'downloadcategories.create','guard_name' => 'web']);
        Permission::create(['name' => 'downloadcategories.edit','guard_name' => 'web']);
        Permission::create(['name' => 'downloadcategories.delete','guard_name' => 'web']);

        //permission for downloadfiles
        Permission::create(['name' => 'downloadfiles.index','guard_name' => 'web']);
        Permission::create(['name' => 'downloadfiles.create','guard_name' => 'web']);
        Permission::create(['name' => 'downloadfiles.edit','guard_name' => 'web']);
        Permission::create(['name' => 'downloadfiles.delete','guard_name' => 'web']);

        //permission for widgets
        Permission::create(['name' => 'widgets.index','guard_name' => 'web']);
        Permission::create(['name' => 'widgets.create','guard_name' => 'web']);
        Permission::create(['name' => 'widgets.edit','guard_name' => 'web']);
        Permission::create(['name' => 'widgets.delete','guard_name' => 'web']);

        //permission for events
        Permission::create(['name' => 'events.index','guard_name' => 'web']);
        Permission::create(['name' => 'events.create','guard_name' => 'web']);
        Permission::create(['name' => 'events.edit','guard_name' => 'web']);
        Permission::create(['name' => 'events.delete','guard_name' => 'web']);

        //permission for agendas
        Permission::create(['name' => 'agendas.index','guard_name' => 'web']);
        Permission::create(['name' => 'agendas.create','guard_name' => 'web']);
        Permission::create(['name' => 'agendas.edit','guard_name' => 'web']);
        Permission::create(['name' => 'agendas.delete','guard_name' => 'web']);

        //permission for links
        Permission::create(['name' => 'links.index','guard_name' => 'web']);
        Permission::create(['name' => 'links.create','guard_name' => 'web']);
        Permission::create(['name' => 'links.edit','guard_name' => 'web']);
        Permission::create(['name' => 'links.delete','guard_name' => 'web']);

        //permission for student
        Permission::create(['name' => 'student.index','guard_name' => 'web']);
        Permission::create(['name' => 'student.create','guard_name' => 'web']);
        Permission::create(['name' => 'student.edit','guard_name' => 'web']);
        Permission::create(['name' => 'student.delete','guard_name' => 'web']);

        //permission for tahun ajaran
        Permission::create(['name' => 'tahun ajaran.index','guard_name' => 'web']);
        Permission::create(['name' => 'tahun ajaran.create','guard_name' => 'web']);
        Permission::create(['name' => 'tahun ajaran.edit','guard_name' => 'web']);
        Permission::create(['name' => 'tahun ajaran.delete','guard_name' => 'web']);

        //permission for room
        Permission::create(['name' => 'room.index','guard_name' => 'web']);
        Permission::create(['name' => 'room.create','guard_name' => 'web']);
        Permission::create(['name' => 'room.edit','guard_name' => 'web']);
        Permission::create(['name' => 'room.delete','guard_name' => 'web']);

        //permission for classroom
        Permission::create(['name' => 'classroom.index','guard_name' => 'web']);
        Permission::create(['name' => 'classroom.create','guard_name' => 'web']);
        Permission::create(['name' => 'classroom.edit','guard_name' => 'web']);
        Permission::create(['name' => 'classroom.delete','guard_name' => 'web']);

        //permission for agama
        Permission::create(['name' => 'agama.index','guard_name' => 'web']);
        Permission::create(['name' => 'agama.create','guard_name' => 'web']);
        Permission::create(['name' => 'agama.edit','guard_name' => 'web']);
        Permission::create(['name' => 'agama.delete','guard_name' => 'web']);

        //permission for akreditasi
        Permission::create(['name' => 'akreditasi.index','guard_name' => 'web']);
        Permission::create(['name' => 'akreditasi.create','guard_name' => 'web']);
        Permission::create(['name' => 'akreditasi.edit','guard_name' => 'web']);
        Permission::create(['name' => 'akreditasi.delete','guard_name' => 'web']);

        //permission for bentuk pendidikan
        Permission::create(['name' => 'bentuk pendidikan.index','guard_name' => 'web']);
        Permission::create(['name' => 'bentuk pendidikan.create','guard_name' => 'web']);
        Permission::create(['name' => 'bentuk pendidikan.edit','guard_name' => 'web']);
        Permission::create(['name' => 'bentuk pendidikan.delete','guard_name' => 'web']);

        //permission for jenjang pendidikan
        Permission::create(['name' => 'jenjang pendidikan.index','guard_name' => 'web']);
        Permission::create(['name' => 'jenjang pendidikan.create','guard_name' => 'web']);
        Permission::create(['name' => 'jenjang pendidikan.edit','guard_name' => 'web']);
        Permission::create(['name' => 'jenjang pendidikan.delete','guard_name' => 'web']);

        //permission for wali kelas
        Permission::create(['name' => 'wali kelas.index','guard_name' => 'web']);
        Permission::create(['name' => 'wali kelas.create','guard_name' => 'web']);
        Permission::create(['name' => 'wali kelas.edit','guard_name' => 'web']);
        Permission::create(['name' => 'wali kelas.delete','guard_name' => 'web']);

        //permission for kurikulum
        Permission::create(['name' => 'kurikulum.index','guard_name' => 'web']);
        Permission::create(['name' => 'kurikulum.create','guard_name' => 'web']);
        Permission::create(['name' => 'kurikulum.edit','guard_name' => 'web']);
        Permission::create(['name' => 'kurikulum.delete','guard_name' => 'web']);

        //permission for jenis ptk
        Permission::create(['name' => 'jenis ptk.index','guard_name' => 'web']);
        Permission::create(['name' => 'jenis ptk.create','guard_name' => 'web']);
        Permission::create(['name' => 'jenis ptk.edit','guard_name' => 'web']);
        Permission::create(['name' => 'jenis ptk.delete','guard_name' => 'web']);

        //permission for jenis pengaduan
        Permission::create(['name' => 'jenis pengaduan.index','guard_name' => 'web']);
        Permission::create(['name' => 'jenis pengaduan.create','guard_name' => 'web']);
        Permission::create(['name' => 'jenis pengaduan.edit','guard_name' => 'web']);
        Permission::create(['name' => 'jenis pengaduan.delete','guard_name' => 'web']);

        //permission for jenis surat permohonan
        Permission::create(['name' => 'jenis surat permohonan.index','guard_name' => 'web']);
        Permission::create(['name' => 'jenis surat permohonan.create','guard_name' => 'web']);
        Permission::create(['name' => 'jenis surat permohonan.edit','guard_name' => 'web']);
        Permission::create(['name' => 'jenis surat permohonan.delete','guard_name' => 'web']);

        //permission for jurusan
        Permission::create(['name' => 'jurusan.index','guard_name' => 'web']);
        Permission::create(['name' => 'jurusan.create','guard_name' => 'web']);
        Permission::create(['name' => 'jurusan.edit','guard_name' => 'web']);
        Permission::create(['name' => 'jurusan.delete','guard_name' => 'web']);

        //permission for lingkup pengaduan
        Permission::create(['name' => 'lingkup pengaduan.index','guard_name' => 'web']);
        Permission::create(['name' => 'lingkup pengaduan.create','guard_name' => 'web']);
        Permission::create(['name' => 'lingkup pengaduan.edit','guard_name' => 'web']);
        Permission::create(['name' => 'lingkup pengaduan.delete','guard_name' => 'web']);

        //permission for semester
        Permission::create(['name' => 'semester.index','guard_name' => 'web']);
        Permission::create(['name' => 'semester.create','guard_name' => 'web']);
        Permission::create(['name' => 'semester.edit','guard_name' => 'web']);
        Permission::create(['name' => 'semester.delete','guard_name' => 'web']);

        //permission for mapel kurikulum
        Permission::create(['name' => 'mapel kurikulum.index','guard_name' => 'web']);
        Permission::create(['name' => 'mapel kurikulum.create','guard_name' => 'web']);
        Permission::create(['name' => 'mapel kurikulum.edit','guard_name' => 'web']);
        Permission::create(['name' => 'mapel kurikulum.delete','guard_name' => 'web']);

        //permission for mapel
        Permission::create(['name' => 'mapel.index','guard_name' => 'web']);
        Permission::create(['name' => 'mapel.create','guard_name' => 'web']);
        Permission::create(['name' => 'mapel.edit','guard_name' => 'web']);
        Permission::create(['name' => 'mapel.delete','guard_name' => 'web']);

        //permission for master wilayah
        Permission::create(['name' => 'master wilayah.index','guard_name' => 'web']);
        Permission::create(['name' => 'master wilayah.create','guard_name' => 'web']);
        Permission::create(['name' => 'master wilayah.edit','guard_name' => 'web']);
        Permission::create(['name' => 'master wilayah.delete','guard_name' => 'web']);

        //permission for prasarana
        Permission::create(['name' => 'prasarana.index','guard_name' => 'web']);
        Permission::create(['name' => 'prasarana.create','guard_name' => 'web']);
        Permission::create(['name' => 'prasarana.edit','guard_name' => 'web']);
        Permission::create(['name' => 'prasarana.delete','guard_name' => 'web']);

        //permission for akses internet
        Permission::create(['name' => 'akses internet.index','guard_name' => 'web']);
        Permission::create(['name' => 'akses internet.create','guard_name' => 'web']);
        Permission::create(['name' => 'akses internet.edit','guard_name' => 'web']);
        Permission::create(['name' => 'akses internet.delete','guard_name' => 'web']);

        //permission for angkatan pd
        Permission::create(['name' => 'angkatan pd.index','guard_name' => 'web']);
        Permission::create(['name' => 'angkatan pd.create','guard_name' => 'web']);
        Permission::create(['name' => 'angkatan pd.edit','guard_name' => 'web']);
        Permission::create(['name' => 'angkatan pd.delete','guard_name' => 'web']);

        //permission for payment type
        Permission::create(['name' => 'payment type.index','guard_name' => 'web']);
        Permission::create(['name' => 'payment type.create','guard_name' => 'web']);
        Permission::create(['name' => 'payment type.edit','guard_name' => 'web']);
        Permission::create(['name' => 'payment type.delete','guard_name' => 'web']);

        //permission for ptk
        Permission::create(['name' => 'ptk.index','guard_name' => 'web']);
        Permission::create(['name' => 'ptk.create','guard_name' => 'web']);
        Permission::create(['name' => 'ptk.edit','guard_name' => 'web']);
        Permission::create(['name' => 'ptk.delete','guard_name' => 'web']);

        //permission for course
        Permission::create(['name' => 'course.index','guard_name' => 'web']);
        Permission::create(['name' => 'course.create','guard_name' => 'web']);
        Permission::create(['name' => 'course.edit','guard_name' => 'web']);
        Permission::create(['name' => 'course.delete','guard_name' => 'web']);

        //permission for member
        Permission::create(['name' => 'member.index','guard_name' => 'web']);
        Permission::create(['name' => 'member.create','guard_name' => 'web']);
        Permission::create(['name' => 'member.edit','guard_name' => 'web']);
        Permission::create(['name' => 'member.delete','guard_name' => 'web']);

        //permission for hero
        Permission::create(['name' => 'hero.index','guard_name' => 'web']);
        Permission::create(['name' => 'hero.create','guard_name' => 'web']);
        Permission::create(['name' => 'hero.edit','guard_name' => 'web']);
        Permission::create(['name' => 'hero.delete','guard_name' => 'web']);
        //permission for program
        Permission::create(['name' => 'program.index','guard_name' => 'web']);
        Permission::create(['name' => 'program.create','guard_name' => 'web']);
        Permission::create(['name' => 'program.edit','guard_name' => 'web']);
        Permission::create(['name' => 'program.delete','guard_name' => 'web']);

        //permission for alasan izin
        Permission::create(['name' => 'alasan izin.index','guard_name' => 'web']);
        Permission::create(['name' => 'alasan izin.create','guard_name' => 'web']);
        Permission::create(['name' => 'alasan izin.edit','guard_name' => 'web']);
        Permission::create(['name' => 'alasan izin.delete','guard_name' => 'web']);

        //permission for alasan layakPIP
        Permission::create(['name' => 'alasan layakPIP.index','guard_name' => 'web']);
        Permission::create(['name' => 'alasan layakPIP.create','guard_name' => 'web']);
        Permission::create(['name' => 'alasan layakPIP.edit','guard_name' => 'web']);
        Permission::create(['name' => 'alasan layakPIP.delete','guard_name' => 'web']);

        //permission for alat transportasi
        Permission::create(['name' => 'alat transportasi.index','guard_name' => 'web']);
        Permission::create(['name' => 'alat transportasi.create','guard_name' => 'web']);
        Permission::create(['name' => 'alat transportasi.edit','guard_name' => 'web']);
        Permission::create(['name' => 'alat transportasi.delete','guard_name' => 'web']);

        //permission for bank
        Permission::create(['name' => 'bank.index','guard_name' => 'web']);
        Permission::create(['name' => 'bank.create','guard_name' => 'web']);
        Permission::create(['name' => 'bank.edit','guard_name' => 'web']);
        Permission::create(['name' => 'bank.delete','guard_name' => 'web']);

        //permission for batas wakturaport
        Permission::create(['name' => 'batas wakturaport.index','guard_name' => 'web']);
        Permission::create(['name' => 'batas wakturaport.create','guard_name' => 'web']);
        Permission::create(['name' => 'batas wakturaport.edit','guard_name' => 'web']);
        Permission::create(['name' => 'batas wakturaport.delete','guard_name' => 'web']);

        //permission for beasiswa
        Permission::create(['name' => 'beasiswa.index','guard_name' => 'web']);
        Permission::create(['name' => 'beasiswa.create','guard_name' => 'web']);
        Permission::create(['name' => 'beasiswa.edit','guard_name' => 'web']);
        Permission::create(['name' => 'beasiswa.delete','guard_name' => 'web']);

        //permission for bidang studi
        Permission::create(['name' => 'bidang studi.index','guard_name' => 'web']);
        Permission::create(['name' => 'bidang studi.create','guard_name' => 'web']);
        Permission::create(['name' => 'bidang studi.edit','guard_name' => 'web']);
        Permission::create(['name' => 'bidang studi.delete','guard_name' => 'web']);

        //permission for bidang usaha
        Permission::create(['name' => 'bidang usaha.index','guard_name' => 'web']);
        Permission::create(['name' => 'bidang usaha.create','guard_name' => 'web']);
        Permission::create(['name' => 'bidang usaha.edit','guard_name' => 'web']);
        Permission::create(['name' => 'bidang usaha.delete','guard_name' => 'web']);

        //permission for cita cita
        Permission::create(['name' => 'cita cita.index','guard_name' => 'web']);
        Permission::create(['name' => 'cita cita.create','guard_name' => 'web']);
        Permission::create(['name' => 'cita cita.edit','guard_name' => 'web']);
        Permission::create(['name' => 'cita cita.delete','guard_name' => 'web']);

        //permission for diklat
        Permission::create(['name' => 'diklat.index','guard_name' => 'web']);
        Permission::create(['name' => 'diklat.create','guard_name' => 'web']);
        Permission::create(['name' => 'diklat.edit','guard_name' => 'web']);
        Permission::create(['name' => 'diklat.delete','guard_name' => 'web']);

        //permission for ekstrakurikuler
        Permission::create(['name' => 'ekstrakurikuler.index','guard_name' => 'web']);
        Permission::create(['name' => 'ekstrakurikuler.create','guard_name' => 'web']);
        Permission::create(['name' => 'ekstrakurikuler.edit','guard_name' => 'web']);
        Permission::create(['name' => 'ekstrakurikuler.delete','guard_name' => 'web']);

        //permission for gelar akademik
        Permission::create(['name' => 'gelar akademik.index','guard_name' => 'web']);
        Permission::create(['name' => 'gelar akademik.create','guard_name' => 'web']);
        Permission::create(['name' => 'gelar akademik.edit','guard_name' => 'web']);
        Permission::create(['name' => 'gelar akademik.delete','guard_name' => 'web']);

        //permission for group mapel
        Permission::create(['name' => 'group mapel.index','guard_name' => 'web']);
        Permission::create(['name' => 'group mapel.create','guard_name' => 'web']);
        Permission::create(['name' => 'group mapel.edit','guard_name' => 'web']);
        Permission::create(['name' => 'group mapel.delete','guard_name' => 'web']);

        //permission for gugus
        Permission::create(['name' => 'gugus.index','guard_name' => 'web']);
        Permission::create(['name' => 'gugus.create','guard_name' => 'web']);
        Permission::create(['name' => 'gugus.edit','guard_name' => 'web']);
        Permission::create(['name' => 'gugus.delete','guard_name' => 'web']);

        //permission for hapus buku
        Permission::create(['name' => 'hapus buku.index','guard_name' => 'web']);
        Permission::create(['name' => 'hapus buku.create','guard_name' => 'web']);
        Permission::create(['name' => 'hapus buku.edit','guard_name' => 'web']);
        Permission::create(['name' => 'hapus buku.delete','guard_name' => 'web']);

        //permission for hoby
        Permission::create(['name' => 'hoby.index','guard_name' => 'web']);
        Permission::create(['name' => 'hoby.create','guard_name' => 'web']);
        Permission::create(['name' => 'hoby.edit','guard_name' => 'web']);
        Permission::create(['name' => 'hoby.delete','guard_name' => 'web']);

        //permission for jabatan fungsional
        Permission::create(['name' => 'jabatan fungsional.index','guard_name' => 'web']);
        Permission::create(['name' => 'jabatan fungsional.create','guard_name' => 'web']);
        Permission::create(['name' => 'jabatan fungsional.edit','guard_name' => 'web']);
        Permission::create(['name' => 'jabatan fungsional.delete','guard_name' => 'web']);

        //permission for jabatam tugaspegawai
        Permission::create(['name' => 'jabatam tugaspegawai.index','guard_name' => 'web']);
        Permission::create(['name' => 'jabatam tugaspegawai.create','guard_name' => 'web']);
        Permission::create(['name' => 'jabatam tugaspegawai.edit','guard_name' => 'web']);
        Permission::create(['name' => 'jabatam tugaspegawai.delete','guard_name' => 'web']);

        //permission for jenis bantuan
        Permission::create(['name' => 'jenis bantuan.index','guard_name' => 'web']);
        Permission::create(['name' => 'jenis bantuan.create','guard_name' => 'web']);
        Permission::create(['name' => 'jenis bantuan.edit','guard_name' => 'web']);
        Permission::create(['name' => 'jenis bantuan.delete','guard_name' => 'web']);

        //permission for jenis bukualat
        Permission::create(['name' => 'jenis bukualat.index','guard_name' => 'web']);
        Permission::create(['name' => 'jenis bukualat.create','guard_name' => 'web']);
        Permission::create(['name' => 'jenis bukualat.edit','guard_name' => 'web']);
        Permission::create(['name' => 'jenis bukualat.delete','guard_name' => 'web']);

        //permission for jenis rombel
        Permission::create(['name' => 'jenis rombel.index','guard_name' => 'web']);
        Permission::create(['name' => 'jenis rombel.create','guard_name' => 'web']);
        Permission::create(['name' => 'jenis rombel.edit','guard_name' => 'web']);
        Permission::create(['name' => 'jenis rombel.delete','guard_name' => 'web']);

        //permission for jenis sertifikasi
        Permission::create(['name' => 'jenis sertifikasi.index','guard_name' => 'web']);
        Permission::create(['name' => 'jenis sertifikasi.create','guard_name' => 'web']);
        Permission::create(['name' => 'jenis sertifikasi.edit','guard_name' => 'web']);
        Permission::create(['name' => 'jenis sertifikasi.delete','guard_name' => 'web']);

        //permission for jenis test
        Permission::create(['name' => 'jenis test.index','guard_name' => 'web']);
        Permission::create(['name' => 'jenis test.create','guard_name' => 'web']);
        Permission::create(['name' => 'jenis test.edit','guard_name' => 'web']);
        Permission::create(['name' => 'jenis test.delete','guard_name' => 'web']);

        //permission for jenis tinggal
        Permission::create(['name' => 'jenis tinggal.index','guard_name' => 'web']);
        Permission::create(['name' => 'jenis tinggal.create','guard_name' => 'web']);
        Permission::create(['name' => 'jenis tinggal.edit','guard_name' => 'web']);
        Permission::create(['name' => 'jenis tinggal.delete','guard_name' => 'web']);

        //permission for keahlian laboratorium
        Permission::create(['name' => 'keahlian laboratorium.index','guard_name' => 'web']);
        Permission::create(['name' => 'keahlian laboratorium.create','guard_name' => 'web']);
        Permission::create(['name' => 'keahlian laboratorium.edit','guard_name' => 'web']);
        Permission::create(['name' => 'keahlian laboratorium.delete','guard_name' => 'web']);

        //permission for kebutuhan khusus
        Permission::create(['name' => 'kebutuhan khusus.index','guard_name' => 'web']);
        Permission::create(['name' => 'kebutuhan khusus.create','guard_name' => 'web']);
        Permission::create(['name' => 'kebutuhan khusus.edit','guard_name' => 'web']);
        Permission::create(['name' => 'kebutuhan khusus.delete','guard_name' => 'web']);

        //permission for kelompok bidang
        Permission::create(['name' => 'kelompok bidang.index','guard_name' => 'web']);
        Permission::create(['name' => 'kelompok bidang.create','guard_name' => 'web']);
        Permission::create(['name' => 'kelompok bidang.edit','guard_name' => 'web']);
        Permission::create(['name' => 'kelompok bidang.delete','guard_name' => 'web']);

        //permission for kelompok usaha
        Permission::create(['name' => 'kelompok usaha.index','guard_name' => 'web']);
        Permission::create(['name' => 'kelompok usaha.create','guard_name' => 'web']);
        Permission::create(['name' => 'kelompok usaha.edit','guard_name' => 'web']);
        Permission::create(['name' => 'kelompok usaha.delete','guard_name' => 'web']);

        //permission for keluar
        Permission::create(['name' => 'keluar.index','guard_name' => 'web']);
        Permission::create(['name' => 'keluar.create','guard_name' => 'web']);
        Permission::create(['name' => 'keluar.edit','guard_name' => 'web']);
        Permission::create(['name' => 'keluar.delete','guard_name' => 'web']);

        //permission for kepanitiaan
        Permission::create(['name' => 'kepanitiaan.index','guard_name' => 'web']);
        Permission::create(['name' => 'kepanitiaan.create','guard_name' => 'web']);
        Permission::create(['name' => 'kepanitiaan.edit','guard_name' => 'web']);
        Permission::create(['name' => 'kepanitiaan.delete','guard_name' => 'web']);

        //permission for kesejahteraan
        Permission::create(['name' => 'kesejahteraan.index','guard_name' => 'web']);
        Permission::create(['name' => 'kesejahteraan.create','guard_name' => 'web']);
        Permission::create(['name' => 'kesejahteraan.edit','guard_name' => 'web']);
        Permission::create(['name' => 'kesejahteraan.delete','guard_name' => 'web']);

        //permission for lambang pengangkat
        Permission::create(['name' => 'lambang pengangkat.index','guard_name' => 'web']);
        Permission::create(['name' => 'lambang pengangkat.create','guard_name' => 'web']);
        Permission::create(['name' => 'lambang pengangkat.edit','guard_name' => 'web']);
        Permission::create(['name' => 'lambang pengangkat.delete','guard_name' => 'web']);

        //permission for lingkungan
        Permission::create(['name' => 'lingkungan.index','guard_name' => 'web']);
        Permission::create(['name' => 'lingkungan.create','guard_name' => 'web']);
        Permission::create(['name' => 'lingkungan.edit','guard_name' => 'web']);
        Permission::create(['name' => 'lingkungan.delete','guard_name' => 'web']);

        //permission for literasi
        Permission::create(['name' => 'literasi.index','guard_name' => 'web']);
        Permission::create(['name' => 'literasi.create','guard_name' => 'web']);
        Permission::create(['name' => 'literasi.edit','guard_name' => 'web']);
        Permission::create(['name' => 'literasi.delete','guard_name' => 'web']);

        //permission for pengkat golongan
        Permission::create(['name' => 'pengkat golongan.index','guard_name' => 'web']);
        Permission::create(['name' => 'pengkat golongan.create','guard_name' => 'web']);
        Permission::create(['name' => 'pengkat golongan.edit','guard_name' => 'web']);
        Permission::create(['name' => 'pengkat golongan.delete','guard_name' => 'web']);

        //permission for pekerjaan
        Permission::create(['name' => 'pekerjaan.index','guard_name' => 'web']);
        Permission::create(['name' => 'pekerjaan.create','guard_name' => 'web']);
        Permission::create(['name' => 'pekerjaan.edit','guard_name' => 'web']);
        Permission::create(['name' => 'pekerjaan.delete','guard_name' => 'web']);

        //permission for pemakai prasarana
        Permission::create(['name' => 'pemakai prasarana.index','guard_name' => 'web']);
        Permission::create(['name' => 'pemakai prasarana.create','guard_name' => 'web']);
        Permission::create(['name' => 'pemakai prasarana.edit','guard_name' => 'web']);
        Permission::create(['name' => 'pemakai prasarana.delete','guard_name' => 'web']);

        //permission for pendaftaran
        Permission::create(['name' => 'pendaftaran.index','guard_name' => 'web']);
        Permission::create(['name' => 'pendaftaran.create','guard_name' => 'web']);
        Permission::create(['name' => 'pendaftaran.edit','guard_name' => 'web']);
        Permission::create(['name' => 'pendaftaran.delete','guard_name' => 'web']);

        //permission for penghasilan ortu
        Permission::create(['name' => 'penghasilan ortu.index','guard_name' => 'web']);
        Permission::create(['name' => 'penghasilan ortu.create','guard_name' => 'web']);
        Permission::create(['name' => 'penghasilan ortu.edit','guard_name' => 'web']);
        Permission::create(['name' => 'penghasilan ortu.delete','guard_name' => 'web']);

        //permission for peran user
        Permission::create(['name' => 'peran user.index','guard_name' => 'web']);
        Permission::create(['name' => 'peran user.create','guard_name' => 'web']);
        Permission::create(['name' => 'peran user.edit','guard_name' => 'web']);
        Permission::create(['name' => 'peran user.delete','guard_name' => 'web']);

        //permission for ref prasarana
        Permission::create(['name' => 'ref prasarana.index','guard_name' => 'web']);
        Permission::create(['name' => 'ref prasarana.create','guard_name' => 'web']);
        Permission::create(['name' => 'ref prasarana.edit','guard_name' => 'web']);
        Permission::create(['name' => 'ref prasarana.delete','guard_name' => 'web']);

        //permission for ref sarana
        Permission::create(['name' => 'ref sarana.index','guard_name' => 'web']);
        Permission::create(['name' => 'ref sarana.create','guard_name' => 'web']);
        Permission::create(['name' => 'ref sarana.edit','guard_name' => 'web']);
        Permission::create(['name' => 'ref sarana.delete','guard_name' => 'web']);

        //permission for standar sarana
        Permission::create(['name' => 'standar sarana.index','guard_name' => 'web']);
        Permission::create(['name' => 'standar sarana.create','guard_name' => 'web']);
        Permission::create(['name' => 'standar sarana.edit','guard_name' => 'web']);
        Permission::create(['name' => 'standar sarana.delete','guard_name' => 'web']);

        //permission for status anak
        Permission::create(['name' => 'status anak.index','guard_name' => 'web']);
        Permission::create(['name' => 'status anak.create','guard_name' => 'web']);
        Permission::create(['name' => 'status anak.edit','guard_name' => 'web']);
        Permission::create(['name' => 'status anak.delete','guard_name' => 'web']);

        //permission for statusdik kurikulum
        Permission::create(['name' => 'statusdik kurikulum.index','guard_name' => 'web']);
        Permission::create(['name' => 'statusdik kurikulum.create','guard_name' => 'web']);
        Permission::create(['name' => 'statusdik kurikulum.edit','guard_name' => 'web']);
        Permission::create(['name' => 'statusdik kurikulum.delete','guard_name' => 'web']);

        //permission for status keaftipanpegawai
        Permission::create(['name' => 'status keaftipanpegawai.index','guard_name' => 'web']);
        Permission::create(['name' => 'status keaftipanpegawai.create','guard_name' => 'web']);
        Permission::create(['name' => 'status keaftipanpegawai.edit','guard_name' => 'web']);
        Permission::create(['name' => 'status keaftipanpegawai.delete','guard_name' => 'web']);

        //permission for status kepmilikansarpras
        Permission::create(['name' => 'status kepmilikansarpras.index','guard_name' => 'web']);
        Permission::create(['name' => 'status kepmilikansarpras.create','guard_name' => 'web']);
        Permission::create(['name' => 'status kepmilikansarpras.edit','guard_name' => 'web']);
        Permission::create(['name' => 'status kepmilikansarpras.delete','guard_name' => 'web']);

        //permission for statsu kepemilikan
        Permission::create(['name' => 'statsu kepemilikan.index','guard_name' => 'web']);
        Permission::create(['name' => 'statsu kepemilikan.create','guard_name' => 'web']);
        Permission::create(['name' => 'statsu kepemilikan.edit','guard_name' => 'web']);
        Permission::create(['name' => 'statsu kepemilikan.delete','guard_name' => 'web']);

        //permission for status tugaskepsek
        Permission::create(['name' => 'status tugaskepsek.index','guard_name' => 'web']);
        Permission::create(['name' => 'status tugaskepsek.create','guard_name' => 'web']);
        Permission::create(['name' => 'status tugaskepsek.edit','guard_name' => 'web']);
        Permission::create(['name' => 'status tugaskepsek.delete','guard_name' => 'web']);

        //permission for sumber air
        Permission::create(['name' => 'sumber air.index','guard_name' => 'web']);
        Permission::create(['name' => 'sumber air.create','guard_name' => 'web']);
        Permission::create(['name' => 'sumber air.edit','guard_name' => 'web']);
        Permission::create(['name' => 'sumber air.delete','guard_name' => 'web']);

        //permission for sumber listrik
        Permission::create(['name' => 'sumber listrik.index','guard_name' => 'web']);
        Permission::create(['name' => 'sumber listrik.create','guard_name' => 'web']);
        Permission::create(['name' => 'sumber listrik.edit','guard_name' => 'web']);
        Permission::create(['name' => 'sumber listrik.delete','guard_name' => 'web']);

        //permission for sumber dana
        Permission::create(['name' => 'sumber dana.index','guard_name' => 'web']);
        Permission::create(['name' => 'sumber dana.create','guard_name' => 'web']);
        Permission::create(['name' => 'sumber dana.edit','guard_name' => 'web']);
        Permission::create(['name' => 'sumber dana.delete','guard_name' => 'web']);

        //permission for sumber gaji
        Permission::create(['name' => 'sumber gaji.index','guard_name' => 'web']);
        Permission::create(['name' => 'sumber gaji.create','guard_name' => 'web']);
        Permission::create(['name' => 'sumber gaji.edit','guard_name' => 'web']);
        Permission::create(['name' => 'sumber gaji.delete','guard_name' => 'web']);

        //permission for tingkat penghargaan
        Permission::create(['name' => 'tingkat penghargaan.index','guard_name' => 'web']);
        Permission::create(['name' => 'tingkat penghargaan.create','guard_name' => 'web']);
        Permission::create(['name' => 'tingkat penghargaan.edit','guard_name' => 'web']);
        Permission::create(['name' => 'tingkat penghargaan.delete','guard_name' => 'web']);

        //permission for tingkat prestasi
        Permission::create(['name' => 'tingkat prestasi.index','guard_name' => 'web']);
        Permission::create(['name' => 'tingkat prestasi.create','guard_name' => 'web']);
        Permission::create(['name' => 'tingkat prestasi.edit','guard_name' => 'web']);
        Permission::create(['name' => 'tingkat prestasi.delete','guard_name' => 'web']);

        //permission for tunjangan
        Permission::create(['name' => 'tunjangan.index','guard_name' => 'web']);
        Permission::create(['name' => 'tunjangan.create','guard_name' => 'web']);
        Permission::create(['name' => 'tunjangan.edit','guard_name' => 'web']);
        Permission::create(['name' => 'tunjangan.delete','guard_name' => 'web']);

        //permission for waktu penyelenggaraan
        Permission::create(['name' => 'waktu penyelenggaraan.index','guard_name' => 'web']);
        Permission::create(['name' => 'waktu penyelenggaraan.create','guard_name' => 'web']);
        Permission::create(['name' => 'waktu penyelenggaraan.edit','guard_name' => 'web']);
        Permission::create(['name' => 'waktu penyelenggaraan.delete','guard_name' => 'web']);

        //permission for status kepegawaian
        Permission::create(['name' => 'status kepegawaian.index','guard_name' => 'web']);
        Permission::create(['name' => 'status kepegawaian.create','guard_name' => 'web']);
        Permission::create(['name' => 'status kepegawaian.edit','guard_name' => 'web']);
        Permission::create(['name' => 'status kepegawaian.delete','guard_name' => 'web']);

        //permission for tingkat pendidikan
        Permission::create(['name' => 'tingkat pendidikan.index','guard_name' => 'web']);
        Permission::create(['name' => 'tingkat pendidikan.create','guard_name' => 'web']);
        Permission::create(['name' => 'tingkat pendidikan.edit','guard_name' => 'web']);
        Permission::create(['name' => 'tingkat pendidikan.delete','guard_name' => 'web']);

        //permission for sekolah
        Permission::create(['name' => 'sekolah.index','guard_name' => 'web']);
        Permission::create(['name' => 'sekolah.create','guard_name' => 'web']);
        Permission::create(['name' => 'sekolah.edit','guard_name' => 'web']);
        Permission::create(['name' => 'sekolah.delete','guard_name' => 'web']);

        //permission for yayasan
        Permission::create(['name' => 'yayasan.index','guard_name' => 'web']);
        Permission::create(['name' => 'yayasan.create','guard_name' => 'web']);
        Permission::create(['name' => 'yayasan.edit','guard_name' => 'web']);
        Permission::create(['name' => 'yayasan.delete','guard_name' => 'web']);

        //permission for sertifikasi iso
        Permission::create(['name' => 'sertifikasi iso.index','guard_name' => 'web']);
        Permission::create(['name' => 'sertifikasi iso.create','guard_name' => 'web']);
        Permission::create(['name' => 'sertifikasi iso.edit','guard_name' => 'web']);
        Permission::create(['name' => 'sertifikasi iso.delete','guard_name' => 'web']);

        //permission for lembaga akreditasi
        Permission::create(['name' => 'lembaga akreditasi.index','guard_name' => 'web']);
        Permission::create(['name' => 'lembaga akreditasi.create','guard_name' => 'web']);
        Permission::create(['name' => 'lembaga akreditasi.edit','guard_name' => 'web']);
        Permission::create(['name' => 'lembaga akreditasi.delete','guard_name' => 'web']);

        //permission for level wilayah
        Permission::create(['name' => 'level wilayah.index','guard_name' => 'web']);
        Permission::create(['name' => 'level wilayah.create','guard_name' => 'web']);
        Permission::create(['name' => 'level wilayah.edit','guard_name' => 'web']);
        Permission::create(['name' => 'level wilayah.delete','guard_name' => 'web']);

    }
}