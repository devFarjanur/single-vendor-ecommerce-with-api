<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Subcategory;
use App\Services\VendorService\AdminCategoryService;
use App\Services\VendorService\AdminProductService;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    protected $adminCategoryService;
    protected $adminProductService;

    public function __construct(AdminCategoryService $adminCategoryService, AdminProductService $adminProductService)
    {
        $this->adminCategoryService = $adminCategoryService;
        $this->adminProductService = $adminProductService;
    }

    public function adminLogin()
    {
        return view('admin.admin_login');
    } 

    public function adminRegister()
    {
        return view('admin.admin_register');
    } 

    public function adminDashboard()
    {
        return view('admin.admin_dashboard');
    }

    public function adminLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }

    public function adminProfile()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_profile_view', compact('profileData'));
    } 
    
    public function adminProfileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/' . $data->photo));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data->photo = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alter-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function adminChangePassword()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_change_password', compact('profileData'));
    }

    public function adminUpdatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        if (!Hash::check($request->old_password, auth::user()->password)) {
            $notification = array(
                'message' => 'Old Password does not match',
                'alert-type' => 'error',
            );
            return back()->with($notification);
        }

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password),
        ]);

        $notification = array(
            'message' => 'Password Changed Successfully',
            'alert-type' => 'success',
        );

        return back()->with($notification);
    } 

    public function adminCustomerList()
    {
        return view('admin.customer.customer-list');
    }

    public function adminCustomerProfile()
    {
        return view('admin.customer.customer-profile');
    }

    public function adminCategoryList()
    {
        $categories = $this->adminCategoryService->CategoryList();
        $subcategories = $this->adminCategoryService->subcategoryList();
        return view('admin.category.category-subcategory-list', compact('categories', 'subcategories'));
    }

    public function adminAddSubcategory()
    {
        $categories = $this->adminCategoryService->categoryList();
        return view('admin.category.add-category-subcategory', compact('categories'));
    }

    public function adminSubcategoryStore(Request $request)
    {
        $this->adminCategoryService->subcategoryStore($request);
        return redirect()->route('admin.category.list');
    }

    public function adminEditSubcategory($id)
    {
        $categories = $this->adminCategoryService->categoryList();
        $subcategory = $this->adminCategoryService->subcategoryFind($id);
        return view('admin.category.edit-subcategory', compact('subcategory', 'categories'));
    }

    public function adminUpdateSubcategory(Request $request, $id)
    {
        $this->adminCategoryService->subcategoryUpdate($request, $id);
        return redirect()->route('admin.category.list');
    }

    public function adminSubcategoryUpdateStatus($request, $id)
    {
        $this->adminCategoryService->subcategoryUpdateStatus($request, $id);
        return redirect()->back();
    }

    public function adminSubcategoryDelete(Request $request, $id)
    {
        $this->adminCategoryService->subcategoryDelete($request, $id);
        return redirect()->back();
    }

    public function adminProductList()
    {
        $categories = $this->adminCategoryService->categoryList();
        $products = $this->adminProductService->productList();
        return view('admin.product.product-list', compact('categories', 'products'));
    }

    public function adminProductUpload()
    {
        $categories = $this->adminCategoryService->getCategoryWithSubcategory();
        return view('admin.product.product-upload', compact('categories'));
    }

    public function getVensorSubcategories($categoryId)
    {
        $subcategories = Subcategory::where('category_id', $categoryId)->get();
        return response()->json([
            'subcategories' => $subcategories
        ]);
    }

    public function adminProductStore(Request $request)
    {
        // dd($request->all());
        $this->adminProductService->productStore($request);
        return redirect()->route('admin.product.list');
    }

    public function adminDetailsProduct()
    {
        return view('admin.product.product-details');
    }

    public function adminInvoice()
    {
        return view('admin.invoice.invoice');
    }

    public function adminChatMessage()
    {
        return view('admin.chat.chat-message');
    }
    public function adminPagesFaqs()
    {
        return view('admin.pages.faqs');
    }
    public function adminHistory()
    {
        return view('admin.history.history');
    }

    public function adminInvoicePrint()
    {
        return view('admin.invoice.invoice-print');
    }
    public function adminLanguage()
    {
        return view('admin.language.language');
    }
    public function adminNotification()
    {
        return view('admin.pages.notifications');
    }
    public function adminTermsCondition()
    {
        return view('admin.pages.terms-conditions');
    }
}
