<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class projectseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $projects =[
            [
                  'title'=> 'sistem informasi akademik',
                  'description'=> 'aplikasi berbasis web untuk pengelolaan data mahasiswa, jadwal kuliah dan nilai perkuliahan',
                  'teknologi'=>'laravel & bootsrap',
                  'image'=> 'project1.jpg',
                  'status'=> 'selsai',
            ],
            [
                'title'=> 'e-commerce seo optimization',
                  'description'=> 'aplikasi optimalisasi struktur heading dan indexing halaman web toko online',
                  'teknologi'=>'php & google search console',
                  'image'=> 'project2.jpg',
                  'status'=> 'in progres',
            ],
            [
                'title'=> ' redesaign cover dan branding',
                  'description'=> 'perancangan element grafis personal branding dan desaign sampul buku rekayasa web',
                  'teknologi'=>'figma & canva',
                  'image'=> 'project3.jpg',
                  'status'=> 'selsai',
            ],
            [
                'title'=> 'sampel 4',
                  'description'=> 'aplikasi berbasis web untuk pengelolaan data mahasiswa, jadwal kuliah dan nilai perkuliahan',
                  'teknologi'=>'laravel & bootsrap',
                  'image'=> 'project1.jpg',
                  'status'=> 'selsai',
            ],
            [
                'title'=> 'sampel 5',
                  'description'=> 'aplikasi berbasis web untuk pengelolaan data mahasiswa, jadwal kuliah dan nilai perkuliahan',
                  'teknologi'=>'laravel & bootsrap',
                  'image'=> 'project1.jpg',
                  'status'=> 'selsai',
            ],
            [
                'title'=> 'sampel 6',
                  'description'=> 'aplikasi berbasis web untuk pengelolaan data mahasiswa, jadwal kuliah dan nilai perkuliahan',
                  'teknologi'=>'laravel & bootsrap',
                  'image'=> 'project1.jpg',
                  'status'=> 'selsai',
            ],
            [
                'title'=> 'sampel 7',
                  'description'=> 'aplikasi berbasis web untuk pengelolaan data mahasiswa, jadwal kuliah dan nilai perkuliahan',
                  'teknologi'=>'laravel & bootsrap',
                  'image'=> 'project1.jpg',
                  'status'=> 'selsai',
            ],
        ];
        foreach ($projects as $project){
            Project::create($project);
        }
    }
}
