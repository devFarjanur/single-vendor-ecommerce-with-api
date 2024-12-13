<?php

namespace App\Services\VendorService;

use App\Models\Category;
use App\Models\Subcategory;
use App\Services\HelperService;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class AdminCategoryService
{
    protected $imageService;
    protected $helperService;

    public function __construct(ImageService $imageService, HelperService $helperService)
    {
        $this->imageService = $imageService;
        $this->helperService = $helperService;
    }
    public function categoryList()
    {
        return Category::get();
    }

    public function findCategory($id)
    {
        return Category::where('status', 'active')->findOrFail($id);
    }

    public function getCategoryWithSubcategory()
    {
        return Category::with('subcategories')
            ->where('status', 'active')
            ->get();
    }

    public function getSubcategories($categoryId)
    {
        $subcategories = Subcategory::where('category_id', $categoryId)->get();
        return $subcategories;
    }

    public function subcategoryList()
    {
        return Subcategory::with('vendor', 'category')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
    }

    public function subcategoryListWithActiveStatus()
    {
        return Subcategory::with('vendor', 'category')
            ->where('status', 'active')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
    }

    public function subcategoryFind($id)
    {
        return Subcategory::findOrFail($id);
    }

    public function subcategoryStore(Request $request)
    {
        try {
            // dd($request->all());
            $imageName = $this->imageService->uploadImage($request);
            Subcategory::create([
                'vendor_id' => auth()->user()->id,
                'category_id' => $request->category_id,
                'name' => $request->name,
                'image' => $imageName,
            ]);
            $this->helperService->setFlashMessage($request, 'Subcategory added successfully.', 'success');
            return true;
        } catch (Exception $e) {
            Log::error("Failed to add subcategory: " . $e->getMessage());
            $this->helperService->setFlashMessage($request, 'Failed to add subcategory.', 'error');
            return false;
        }
    }

    public function subcategoryUpdate(Request $request, $id)
    {
        try {
            $subcategory = $this->subcategoryFind($id);
            $imageName = $this->imageService->uploadImage($request);
            $subcategory->update([
                'category_id' => $request->category_id,
                'name' => $request->name,
                'image' => $imageName,
            ]);
            $this->helperService->setFlashMessage($request, 'Subcategory updated successfully.', 'success');
            return true;
        } catch (Exception $e) {
            Log::error("Failed to updated subcategory: " . $e->getMessage());
            $this->helperService->setFlashMessage($request, 'Failed to updated subcategory.', 'error');
            return false;
        }

    }

    public function subcategoryUpdateStatus(Request $request, $id)
    {
        try {
            $subcategory = $this->subcategoryFind($id);
            $subcategory->update([
                'status' => $request->status,
            ]);
            $this->helperService->setFlashMessage($request, 'Subcategory status updated successfully.', 'success');
            return true;
        } catch (Exception $e) {
            Log::error("Failed to update subcategory status.: " . $e->getMessage());
            $this->helperService->setFlashMessage($request, 'Failed to update subcategory status.', 'error');
            return false;
        }
    }

    public function subcategoryDelete(Request $request, $id)
    {
        try {
            $subcategory = $this->subcategoryFind($id);
            $subcategory->delete();
            $this->helperService->setFlashMessage($request, 'Subcategory deleted successfully.', 'success');
            return true;
        } catch (Exception $e) {
            Log::error("Failed to delete subcategory: " . $e->getMessage());
            $this->helperService->setFlashMessage($request, 'Failed to delete subcategory.', 'error');
            return false;
        }
    }
}
