<?php
use Migrations\AbstractSeed;

/**
 * Mime seed.
 */
class MimeSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['extensao' => 'jpeg', 'mime'=> 'image/jpeg'],
            ['extensao' => 'png', 'mime'=>'image/png'],
            ['extensao' => 'jpg', 'mime'=> 'image/jpg'],
            ['extensao' =>'mp4', 'mime'=>'video/mp4'],
            ['extensao' =>'doc', 'mime'=>'application/msword'],
            ['extensao' =>'docx', 'mime'=>'application/vnd.openxmlformats-officedocument.wordprocessingml.document'],
            ['extensao' =>'pdf', 'mime'=>'application/pdf'],
            ['extensao' => 'xls', 'mime'=> 'application/vnd.ms-excel'],
            ['extensao' => 'xlsx', 'mime'=> 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'],
            ['extensao' =>'ppt', 'mime'=>'application/vnd.ms-powerpoint'],
            ['extensao' => 'pptx', 'mime'=>'application/vnd.openxmlformats-officedocument.presentationml.presentation']
        ];

        $table = $this->table('mimes');
        $table->insert($data)->save();
    }
}
