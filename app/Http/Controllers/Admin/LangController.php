<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LangController extends Controller
{
    // This returns view for languages list
    public function index()
    {
        $lang = Language::all();
        return view('admin.lang.index', compact('lang'));
    }

    // This returns view for adding language
    public function add()
    {
        return view('admin.lang.add');
    }

    public function add_process(Request $request)
    {
        $rules = [
            'name' => 'required',
            'code' => 'required',
            'flag' => 'required'
        ];

        $validated = $request->validate($rules);

        $path = Storage::disk('mydisk')->put('flags', $request->flag);

        $data = [
            'name' => $validated['name'],
            'code' => $validated['code'],
            'flag' => $path
        ];

        Language::create($data);

        return redirect()->route('admin.lang.index');
    }

    // This returns view for language update
    public function edit($id)
    {
        $lang = Language::find($id);
        return view('admin.lang.edit', compact('lang'));
    }

    // This processes the edit form
    public function edit_process(Request $request, $id)
    {
        $rules = [
            'name' => 'required',
            'code' => 'required',
            'flag' => 'nullable'
        ];

        $validated = $request->validate($rules);

        $lang = Language::find($id);
        $lang->name = $validated['name'];
        $lang->code = $validated['code'];
        if ($request->has('flag')) {
            $path = Storage::disk('mydisk')->put('flags', $request->flag);
            $lang->flag = $path;
        }
        $lang->save();

        return redirect()->route('admin.lang.index');
    }
}
