<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function showNewForm(){
        $title = "Add Menu";
        $parents = Menu::where('parent', 0)->orderBy('id', 'asc')->get();

        return view('adminpanel.menu.form')->with(compact('parents', 'title'));
    }

    public function showEditForm($id){
        $title = "Edit Menu";
        $menu = Menu::where('id', $id)->first();
        $parents = Menu::where('parent', 0)->orderBy('id', 'asc')->get();

        return view('adminpanel.menu.form')->with(compact('parents',  'menu', 'title'));
    }

    public function add(Request $request){
        $this->validate($request, [
            'title' => 'required|string',
            'parent' => 'required|integer',
        ]);

        $result = Menu::create($request->all());

        if($result){
            return redirect()->back()->withErrors(["message"=>"Operation Successfull"]);
        }
        else{
            return redirect()->back()->withErrors("Something went wrong. Please try again");
        }
    }

    public function edit(Request $request, $id){
        $this->validate($request, [
            'title' => 'required|string',
            'parent' => 'required|integer',
        ]);

        $menu = Menu::where('id', $id)->first();

        if($menu){
            if($menu->parent > 0){
                $menu->parent = $request->parent;
            }
            $menu->title = $request->title;
            $menu->content = $request->content;

            $menu->save();

            return redirect()->back()->withErrors(["message"=>"Operation Successfull"]);
        }
        return redirect()->back()->withErrors("Something went wrong. Please try again");
        
    }

    public function view($id){
        $menu = Menu::where('id', $id)->first();

        return view('menu_details')->with(compact('menu'));

    }

    public function remove($id){
        $result = Menu::where('id', $id)->where('parent', '!=', 0)->delete();

        if($result){
            return redirect()->back()->withErrors(["message"=>"Operation Successfull"]);
        }
        else{
            return redirect()->back()->withErrors("Something went wrong. Please try again");
        }

    }

    public function showList(){
        $parents = Menu::where('parent', 0)->orderBy('id', 'asc')->get();
        $childs = Menu::where('parent','!=', 0)->orderBy('id', 'asc')->with('root')->get();

        return view('adminpanel.menu.list')->with(compact('parents', 'childs'));
    }

}
