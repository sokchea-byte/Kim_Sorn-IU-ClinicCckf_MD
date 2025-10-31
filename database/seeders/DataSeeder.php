<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Images in public/assets/images/products
        $images = [
            'product-1.jpg',
            'product-2.jpg',
            'product-3.jpg',
            'product-4.jpg',
            'product-5.jpg',
            'product-6.jpg',
            'product-7.jpg',
            'product-8.jpg',
            'product-9.jpg',
            'product-10.jpg',
        ];

        // Categories (ថ្នាំសំខាន់ៗ)
        $categories = [
            ['name' => 'Pain Relievers', 'slug' => 'pain-relievers', 'user_id' => 1],
            ['name' => 'Anti-inflammatory', 'slug' => 'anti-inflammatory', 'user_id' => 1],
            ['name' => 'Antibiotics', 'slug' => 'antibiotics', 'user_id' => 1],
            ['name' => 'Allergy', 'slug' => 'allergy', 'user_id' => 1],
            ['name' => 'Stomach', 'slug' => 'stomach', 'user_id' => 1],
            ['name' => 'Diabetes', 'slug' => 'diabetes', 'user_id' => 1],
            ['name' => 'Vitamins', 'slug' => 'vitamins', 'user_id' => 1],
            ['name' => 'Other', 'slug' => 'other', 'user_id' => 1],
        ];


        // Subcategories (ប្រភេទរង)
        $subcategories = [
            ['name' => 'Paracetamol', 'slug' => 'paracetamol', 'user_id' => 1, 'category_id' => 1],
            ['name' => 'Ibuprofen', 'slug' => 'ibuprofen', 'user_id' => 1, 'category_id' => 2],
            ['name' => 'Amoxicillin', 'slug' => 'amoxicillin', 'user_id' => 1, 'category_id' => 3],
            ['name' => 'Cetirizine', 'slug' => 'cetirizine', 'user_id' => 1, 'category_id' => 4],
            ['name' => 'Omeprazole', 'slug' => 'omeprazole', 'user_id' => 1, 'category_id' => 5],
            ['name' => 'Metformin', 'slug' => 'metformin', 'user_id' => 1, 'category_id' => 6],
            ['name' => 'Aspirin', 'slug' => 'aspirin', 'user_id' => 1, 'category_id' => 1],
            ['name' => 'Naproxen', 'slug' => 'naproxen', 'user_id' => 1, 'category_id' => 2],
            ['name' => 'Doxycycline', 'slug' => 'doxycycline', 'user_id' => 1, 'category_id' => 3],
            ['name' => 'Loratadine', 'slug' => 'loratadine', 'user_id' => 1, 'category_id' => 4],
        ];

        // Posts (អត្ថបទពាក់ព័ន្ធនឹងថ្នាំ)
        $posts = [
            [
                'title' => 'The Benefits of Paracetamol',
                'content' => 'Paracetamol helps relieve pain and reduce fever effectively for common illnesses such as headaches and colds.',
                'slug' => 'benefits-of-paracetamol',
                'user_id' => 1,
                'category_id' => 1,
                'subcategory_id' => 1,
                'image' => 'product-1.jpg',
            ],
            [
                'title' => 'How Ibuprofen Reduces Inflammation',
                'content' => 'Ibuprofen is widely used to reduce inflammation, swelling, and pain caused by injuries or arthritis.',
                'slug' => 'ibuprofen-reduces-inflammation',
                'user_id' => 1,
                'category_id' => 2,
                'subcategory_id' => 2,
                'image' => 'product-2.jpg',
            ],
            [
                'title' => 'Understanding Amoxicillin Antibiotic',
                'content' => 'Amoxicillin is an antibiotic used to fight bacterial infections in the lungs, throat, and urinary tract.',
                'slug' => 'understanding-amoxicillin-antibiotic',
                'user_id' => 1,
                'category_id' => 3,
                'subcategory_id' => 3,
                'image' => 'product-3.jpg',
            ],
            [
                'title' => 'Why Cetirizine Is Effective for Allergies',
                'content' => 'Cetirizine is an antihistamine that helps relieve symptoms like sneezing, itching, and watery eyes.',
                'slug' => 'cetirizine-effective-for-allergies',
                'user_id' => 1,
                'category_id' => 4,
                'subcategory_id' => 4,
                'image' => 'product-4.jpg',
            ],
            [
                'title' => 'Omeprazole and Stomach Health',
                'content' => 'Omeprazole treats stomach acid problems, ulcers, and acid reflux by reducing acid production in the stomach.',
                'slug' => 'omeprazole-stomach-health',
                'user_id' => 1,
                'category_id' => 5,
                'subcategory_id' => 5,
                'image' => 'product-5.jpg',
            ],
            [
                'title' => 'Metformin: Key Facts for Diabetic Patients',
                'content' => 'Metformin helps control blood sugar levels in people with type 2 diabetes.',
                'slug' => 'metformin-key-facts',
                'user_id' => 1,
                'category_id' => 6,
                'subcategory_id' => 6,
                'image' => 'product-6.jpg',
            ],
            [
                'title' => 'Aspirin and Heart Health',
                'content' => 'Aspirin helps reduce the risk of heart attack and stroke by preventing blood clot formation.',
                'slug' => 'aspirin-heart-health',
                'user_id' => 1,
                'category_id' => 7,
                'subcategory_id' => 7,
                'image' => 'product-7.jpg',
            ],
            [
                'title' => 'Naproxen and Joint Pain Relief',
                'content' => 'Naproxen reduces pain and inflammation in joints, helping people with arthritis.',
                'slug' => 'naproxen-joint-pain-relief',
                'user_id' => 1,
                'category_id' => 8,
                'subcategory_id' => 8,
                'image' => 'product-8.jpg',
            ],
            [
                'title' => 'Doxycycline: Uses and Benefits',
                'content' => 'Doxycycline is a broad-spectrum antibiotic used to treat various bacterial infections.',
                'slug' => 'doxycycline-uses-benefits',
                'user_id' => 1,
                'category_id' => 9,
                'subcategory_id' => 9,
                'image' => 'product-9.jpg',
            ],
            [
                'title' => 'Loratadine for Allergy Relief',
                'content' => 'Loratadine is a non-drowsy antihistamine that effectively relieves allergy symptoms.',
                'slug' => 'loratadine-allergy-relief',
                'user_id' => 1,
                'category_id' => 10,
                'subcategory_id' => 10,
                'image' => 'product-10.jpg',
            ],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
        foreach ($subcategories as $subCategory) {
            \App\Models\SubCategory::create($subCategory);
        }
        foreach ($posts as $post) {
            \App\Models\Post::create($post);
        }
    }
}
