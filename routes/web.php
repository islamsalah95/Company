<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('home');
});



Route::middleware(['auth'])->group(function () {
    Route::get('/crmCompany', function () {
        return view('crmCompany');
    })->name('crmCompany');

    Route::get('/test', function () {
        $arrMin =[];
        for ($h = 0; $h < 1000000; $h++) {
            $arrMin[]=$h;
        }
        $arr1 = [4, 3, 6, 500 , 1, 5, 2, 7];


        $arr=array_merge($arr1,$arrMin);


        sort($arr);



        // function merge(&$arr, $left, $middle, $right) {
        //     $n1 = $middle - $left + 1;
        //     $n2 = $right - $middle;

        //     // Create temporary arrays
        //     $L = [];
        //     $R = [];

        //     // Copy data to temporary arrays L[] and R[]
        //     for ($i = 0; $i < $n1; $i++)
        //         $L[$i] = $arr[$left + $i];
        //     for ($j = 0; $j < $n2; $j++)
        //         $R[$j] = $arr[$middle + 1 + $j];

        //     // Merge the temporary arrays back into $arr[left..right]
        //     $i = 0; // Initial index of first subarray
        //     $j = 0; // Initial index of second subarray
        //     $k = $left; // Initial index of merged subarray

        //     while ($i < $n1 && $j < $n2) {
        //         if ($L[$i] <= $R[$j]) {
        //             $arr[$k] = $L[$i];
        //             $i++;
        //         } else {
        //             $arr[$k] = $R[$j];
        //             $j++;
        //         }
        //         $k++;
        //     }

        //     // Copy the remaining elements of L[], if any
        //     while ($i < $n1) {
        //         $arr[$k] = $L[$i];
        //         $i++;
        //         $k++;
        //     }

        //     // Copy the remaining elements of R[], if any
        //     while ($j < $n2) {
        //         $arr[$k] = $R[$j];
        //         $j++;
        //         $k++;
        //     }
        // }

        // function mergeSort(&$arr, $left, $right) {
        //     if ($left < $right) {
        //         // Same as ($left+$right)/2, but avoids overflow for large left and right
        //         $middle = $left + (int)(($right - $left) / 2);

        //         // Sort first and second halves
        //         mergeSort($arr, $left, $middle);
        //         mergeSort($arr, $middle + 1, $right);

        //         // Merge the sorted halves
        //         merge($arr, $left, $middle, $right);
        //     }
        // }


        // $n = count($arr);
        // mergeSort($arr, 0, $n - 1);



     return view('test',['arr'=>$arr]);

    });

    // The provided algorithm is a simple implementation of selection sort. The time complexity of selection sort is O(n^2), where 'n' is the number of elements in the array.

    // In your case, the algorithm iterates through the array twice: once for the outer loop and once for the inner loop. In each iteration of the outer loop, it finds the maximum element from the unsorted part of the array and swaps it with the element at the beginning of the unsorted part. Since there are 'n' iterations of the outer loop and 'n' iterations of the inner loop, the overall time complexity is O(n^2).

    // So, for your array with 8 elements, the time complexity of this algorithm would be O(8^2) = O(64).

    Route::POST('/logouts', function () {
        Auth::guard('web')->logout();
        Session::invalidate();
        Session::regenerateToken();
        return redirect('/');
    })->name('logouts');
});



Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
require __DIR__.'/crm.php';
