<?php
namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends controller
{
    public function test1()
    {
//        $students = DB::select('select * from student');
//
//        var_dump($students);
//增加
//        $bool = DB::insert('insert into student(name,age) values(?,?) ',
//            ['imooc',19]);
//        var_dump($bool);

//修改

//        $num = DB::update('update student set age= ? where name = ?',[20,'sean']);
//
//        var_dump($num);


// 查询
//        $students = DB::select('select * from student where id >?',[1001]);
//        dd($students);
//删除
//        $num = DB::delete('delete from student where id > ?',[1001]);
//        dd($num);
    }
    //s使用查询构造器添加数据
    public function query1()
    {
//        $bool = DB::table('student')->insert(
//            ['name'=>'imooc','age'=>18]
//        );
//        var_dump($bool);

//        $id = DB::table('student')->insertGetId(
//            ['name'=>'sean','age'=>18]
//        );
//        var_dump($id);

        $bool = DB::table('student')->insert([
            ['name'=>'name1','age'=>20],
            ['name'=>'name2','age'=>21]
        ]);
        var_dump($bool);
    }
//s使用查询构造器更新数据
    public function query2 ()
    {
//        查询修改
//        $num = DB::table('student')
//            ->where('id',1003)
//            ->update(['age'=>30]);
//        var_dump($num);
//        自增/自减
//        $num = DB::table('student')->increment('age',3);
//        $num = DB::table('student')->decrement('age',1);

//        $num = DB::table('student')
//            ->where('id',1003)
//            ->decrement('age',3);

//        $num = DB::table('student')
//            ->where('id',1003)
//            ->decrement('age',3,['name'=>'iimooc']);
//        var_dump($num);
    }
    //使用查询构造器删除数据
    public function query3()
    {
//        删除指定数据
//        $num = DB::table('student')->delete()
//            ->where('id',1005)
//            ->delete();
//        var_dump($num);
//        删除指定条件的数据
//        $num = DB::table('student')
//            ->where('id','>=',1005)
//            ->delete();
//        var_dump($num);
//            删除整个表
//        DB::table('student')->truncate();

    }

    //使用查询构造器查询数据
    public function query4()
    {
//        $bool = DB::table('student')->insert([
//            ['id'=>1001,'name'=> 'name1','age'=>'18'],
//            ['id'=>1002,'name'=> 'name2','age'=>'18'],
//            ['id'=>1003,'name'=> 'name3','age'=>'19'],
//            ['id'=>1004,'name'=> 'name4','age'=>'20'],
//            ['id'=>1005,'name'=> 'name5','age'=>'21']
//        ]);
//        var_dump($bool);


//        get()
//        $students = DB::table('student')->get();


//        first()
//        $students = DB::table('student')
//            ->orderBy('id','desc')
//            ->first();
//        dd($students);


        //        where()

//        $students= DB::table('student')
//            ->where('id','>=',1002)
//            ->get();
//        dd($students);
//        多个条件的where（）
//        $students= DB::table('student')
//            ->whereRaw('id >= ? and age > ?',[1001,18])
//            ->get();
//        dd($students);


        //pluck
//        $names= DB::table('student')
//            ->pluck('name');
//        dd($names);


        //lists
//        $names= DB::table('student')
//            ->lists('name','id');
//        dd($names);


//        select
//        $names= DB::table('student')
//            ->select('id','name','age')
//            ->get();
//        dd($names);

//        chunk
//        echo '<pre>';
//        DB::table('student')->chunk(2,function($students){
//            var_dump($students);

//            return false;  满足条件后停止
//        });
//
    }


    //聚合函数
    public function query5()
    {

//        count()
//        $num = DB::table('student')->count();
//        var_dump($num);

//        max()
//        $max = DB::table('student')->max('age');
//        $min = DB::table('student')->min('age');
//        $avg = DB::table('student')->avg('age');
//        $sum = DB::table('student')->sum('age');
//        var_dump($sum);
    }

    public function orm1()
    {
        //all()
//        $students = Student::all();


        //find()
//        $student = Student::find(1001);
//        dd( $student);

//        findOrFail()
//        $student = Student::findOrFail(6001);
//        var_dump($student);
//        查询构造器
//        $students = Student::get();
//        dd($students);

//        $students = Student::where('id','>','1001')
//            ->orderBy('age','desc')
//            ->first();
//        dd($students);

//        echo '<pre>';
//        Student::chunk(2,function($students)
//        {
//            var_dump($students);
//        });

//        聚合函数
//        $num = Student::count();
        $num = Student::where('id','>',1001)->max('age');
        var_dump($num);
    }

    public function orm2()
    {
        //使用模型新增数据

//        $student = new Student();
//        $student->name = 'sean3';
//        $student->age = '20';
//        $bool = $student->save();
//        dd($bool);

//        $student = Student::find(1014);
//        echo date('Y-m-d H:i:s',$student->created_at);

//        使用模型的Create方法新增数据

//        $student = Student::create(
//            ['name' => 'imooc1','age' => 18],
//            ['name' => 'imooc2','age' => 19]
//        );
//        dd($student);

        //firstOrCreate()以属性查找，如果没有就新增。

//        $student = Student::forceCreate(
//            ['name'=>'imoocs']
//        );
//        dd($student);

        //firstOrNew()
        $student = Student::firstOrNew(
            ['name'=>'imoocss']
        );
        $bool = $student->save();
        dd($bool);

    }

    public function orm3()
    {
        //通过模型更新数据
//        $student = Student::find('1020');
//        $student->name = 'kitty';
//        $bool = $student->save();
//        var_dump($bool);

        $num = Student::where('id','>',1019) -> update(
            ['age' => 41]
        );
        var_dump($num);
    }

    public function orm4()
    {
//        通过模型删除
//        $student = Student::find('1013');
//        $bool = $student->delete();
//        var_dump($bool);

//        通过主键删除

//        $num = Student::destroy(1020);
//        $num = Student::destroy(1019,1018);
//        $num = Student::destroy([1019,1018]);
//        var_dump($num);

//        $num = Student::where('id','>',1004)->delete();
//        var_dump($num);
    }

    public function section1()
    {
//        $students = Student::get();
        $students = [];
        $arr = ['sean','imooc'];
        $name = 'sean';
        return view('student.section1',[
            'name' => $name,
            'arr' => $arr,
            'students' => $students,
        ]);
    }

    public function urlText()
    {
        return 'urlText';
    }

    public function request1(Request $request)
    {
        //1.
        //取值
        //echo $request->input('name');
        //echo $request->input('sex','未知');
        if($request->has('name')){
            echo $request->input('name');
        }else{
            echo '无参数';
        }

    }

}