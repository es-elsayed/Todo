<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Seeder;

class LaravelRoadMapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ...$this->beginnerData(),
            ...$this->advancedBeginnerData(),
            // ...$this->midlevelData(),
            // ...$this->seniorData(),
        ];

        $todo = Todo::create([
            'title' => "Larvel Road Map",
            'user_id' => "1",
        ]);
        $todo->tasks()->createMany($data);
    }
    private function beginnerData()
    {
        return [
            [
                "title" => "Beginner level",
                "description" => "",
                "url" => "",
            ],
            [
                "title" => "Routing and Controllers: Basics",
                "description" => "Test Your Laravel Routing Skills: Complete 12 Tasks?",
                "url" => "https://www.youtube.com/watch?v=pENlD3izA3Q",
            ],
            [
                "title" => "Callback Functions and Route::view() (1)",
                "description" => "Resources about callback functions",
                "url" => "https://laravel.com/docs/routing#basic-routing",
            ],
            [
                "title" => "Callback Functions and Route::view() (2)",
                "description" => "Using the Route::view() method in Laravel routing.",
                "url" => "https://laravel.com/docs/routing#view-routes",
            ],
            [
                "title" => "Routing to a Single Controller Method",
                "description" => "Information about routing to a single controller method and basic controller usage.",
                "url" => "https://laravel.com/docs/controllers#basic-controllers",
            ],
            [
                "title" => "Route Parameters",
                "description" => "Documentation on using route parameters in Laravel routing.",
                "url" => "https://laravel.com/docs/routing#route-parameters",
            ],
            [
                "title" => "Route Naming (1)",
                "description" => "Resources explaining how to name routes in Laravel",
                "url" => "https://laravel.com/docs/routing#named-routes",
            ],
            [
                "title" => "Route Naming (2)",
                "description" => "Why You Need Route Names? and what is their importance.",
                "url" => "https://www.youtube.com/watch?v=7lalb6HtR1c",
            ],
            [
                "title" => "Route Groups (1)",
                "description" => "Information about grouping routes in Laravel",
                "url" => "https://laravel.com/docs/routing#route-groups",
            ],
            [
                "title" => "Route Groups (2)",
                "description" => "Laravel Route Grouping: Simple to Very Complex.",
                "url" => "https://www.youtube.com/watch?v=I6kyfSmPhn8",
            ],
            [
                "title" => "Route Groups (3)",
                "description" => "Code Review: Route Groups - User/Admin, Controller Names(paces).",
                "url" => "https://www.youtube.com/watch?v=AOwCE25bhSU",
            ],
            [
                "title" => "Blade Basics (1)",
                "description" => "Test Your Laravel Blade Skills: Complete 8 Tasks?",
                "url" => "https://www.youtube.com/watch?v=P8s7UHuUhbg",
            ],
            [
                "title" => "Blade Basics (2)",
                "description" => "9 Quick Tips about Laravel Blade.",
                "url" => "https://www.youtube.com/watch?v=-Glz1InN68o",
            ],
            [
                "title" => "Displaying Variables in Blade",
                "description" => "Documentation on how to display data and variables using Blade.",
                "url" => "https://laravel.com/docs/blade#displaying-data",
            ],
            [
                "title" => "Blade If-Else and Loop Structures (1)",
                "description" => "Information on using if-else statements",
                "url" => "https://laravel.com/docs/blade#if-statements",
            ],
            [
                "title" => "Blade If-Else and Loop Structures (2)",
                "description" => "Information on oops in Blade templates.",
                "url" => "https://laravel.com/docs/blade#loops",
            ],
            [
                "title" => "Layout: @include, @extends, @section, @yield",
                "description" => "Documentation on creating layouts and using Blade directives for template inheritance.",
                "url" => "https://laravel.com/docs/blade#layouts-using-template-inheritance",
            ],
            [
                "title" => "Blade Components (1)",
                "description" => "Resources for working with Blade components in Laravel.",
                "url" => "https://laravel.com/docs/blade#components",
            ],
            [
                "title" => "Blade Components (2)",
                "description" => "Laravel Blade Components: Two Examples - Laravel Breeze/UI",
                "url" => "https://www.youtube.com/watch?v=HybWBINeXMw",
            ],
            [
                "title" => "Auth Basics (1)",
                "description" => "Test Your Laravel Auth Skills: Complete 7 Tasks?",
                "url" => "https://www.youtube.com/watch?v=v_3NmwtN_S0",
            ],
            [
                "title" => "Auth Basics (2)",
                "description" => "8 Tips & Tricks about Laravel Auth",
                "url" => "https://www.youtube.com/watch?v=-dpp4CJS6Vk",
            ],
            [
                "title" => "Starter Kits (1)",
                "description" => "Laravel Breeze Official Documentation.",
                "url" => "https://laravel.com/docs/starter-kits#laravel-breeze",
            ],
            [
                "title" => "Starter Kits (2)",
                "description" => "Laravel UI: Official Github Page",
                "url" => "https://github.com/laravel/ui",
            ],
            [
                "title" => "Starter Kits (3)",
                "description" => "Laravel 8 Auth: 5 'Latest' Things You Need to Know.",
                "url" => "https://www.youtube.com/watch?v=L1FVdHdEm_8",
            ],
            [
                "title" => "Starter Kits (4)",
                "description" => "Laravel Breeze: Login with Email, Name or Phone",
                "url" => "https://www.youtube.com/watch?v=jFGsLqqBMQc",
            ],
            [
                "title" => "Starter Kits (5)",
                "description" => "Laravel Users: Set Locations/Teams with Breeze",
                "url" => "https://www.youtube.com/watch?v=5T83czFrfEU",
            ],
            [
                "title" => "Starter Kits (6)",
                "description" => "Practical Laravel Breeze: Menu, Routes and Full MVC",
                "url" => "https://www.youtube.com/watch?v=r61lkTd4m1U",
            ],
            [
                "title" => "Starter Kits (7)",
                "description" => "Customize Laravel Breeze: Menus, Forms, Components, Tables ",
                "url" => "https://www.youtube.com/watch?v=XVxyY_owL_M",
            ],
            [
                "title" => "Starter Kits (8)",
                "description" => "Save User Login Time/IP: Laravel Jetstream, Breeze, Fortify, UI",
                "url" => "https://www.youtube.com/watch?v=v4IRYiylQPs",
            ],
            [
                "title" => "Starter Kits (9)",
                "description" => "NEW Laravel Breeze: Anti-Jetstream from Taylor Himself",
                "url" => "https://www.youtube.com/watch?v=dofUcI1PkUA",
            ],
            [
                "title" => "Default Auth Model and Access its Fields from Anywhere",
                "description" => "Documentation on retrieving the authenticated user's information in Laravel.",
                "url" => "https://laravel.com/docs/authentication#retrieving-the-authenticated-user",
            ],
            [
                "title" => "Check Auth in Controller / Blade (1)",
                "description" => "Determining If The Current User Is Authenticated",
                "url" => "https://laravel.com/docs/authentication#determining-if-the-current-user-is-authenticated",
            ],
            [
                "title" => "Check Auth in Controller / Blade (2)",
                "description" => "Blade: Authentication Directives",
                "url" => "https://laravel.com/docs/blade#authentication-directives",
            ],
            [
                "title" => "Auth Middleware",
                "description" => "Documentation on protecting routes using authentication middleware in Laravel.",
                "url" => "https://laravel.com/docs/authentication#protecting-routes",
            ],
            [
                "title" => "Database Basics (1)",
                "description" => "Test Your Laravel Migrations Skills: Complete 10 Tasks?",
                "url" => "https://www.youtube.com/watch?v=tPU1hNKI_lc",
            ],
            [
                "title" => "Database Basics (2)",
                "description" => "Database Migrations.",
                "url" => "https://laravel.com/docs/migrations",
            ],
            [
                "title" => "Database Basics (3)",
                "description" => "Laravel Migrations: Table Created but Foreign Key Failed?.",
                "url" => "https://www.youtube.com/watch?v=DWzUBpsEEHY",
            ],
            [
                "title" => "Database Basics (4)",
                "description" => "Laravel Migration: Change Foreign Key to Nullable.",
                "url" => "https://www.youtube.com/watch?v=QL0gKwGjJ-4",
            ],
            [
                "title" => "Database Basics (5)",
                "description" => "Laravel 8 Migrations: Generate from Database Schema.",
                "url" => "https://www.youtube.com/watch?v=eLybI4WPuWc",
            ],
            [
                "title" => "Database Basics (6)",
                "description" => "Laravel Migrations: 12 Useful Tips in 12 Minutes",
                "url" => "https://www.youtube.com/watch?v=bSQcmcu6yHc&t=85s",
            ],
            [
                "title" => "Basic Eloquent Model and MVC (1)",
                "description" => "Test Your Eloquent Basic Skills: 11 Tasks to Complete?",
                "url" => "https://www.youtube.com/watch?v=AmvLs9sRSH8",
            ],
            [
                "title" => "Basic Eloquent Model and MVC (2)",
                "description" => "Eloquent: Getting Started",
                "url" => "https://laravel.com/docs/eloquent",
            ],
            [
                "title" => "Eloquent Relationships (1)",
                "description" => "Test Your Eloquent Relationships Skills: 9 Tasks to Complete?",
                "url" => "https://www.youtube.com/watch?v=ohj0Mc09DyE",
            ],
            [
                "title" => "Eloquent Relationships (2)",
                "description" => "Eloquent Relationships: One-to-One",
                "url" => "https://laravel.com/docs/eloquent-relationships#one-to-one",
            ],
            [
                "title" => "Eloquent Relationships (3)",
                "description" => "Eloquent Relationships: One-to-Many",
                "url" => "https://laravel.com/docs/eloquent-relationships#one-to-many",
            ],
            [
                "title" => "Eloquent Relationships (4)",
                "description" => "Eloquent Relationships: BelongsTo",
                "url" => "https://laravel.com/docs/eloquent-relationships#one-to-many-inverse",
            ],
            [
                "title" => "Eloquent Relationships (5)",
                "description" => "Eloquent Relationships: Many-to-Many",
                "url" => "https://laravel.com/docs/eloquent-relationships#many-to-many",
            ],
            [
                "title" => "Eloquent Relationships (6)",
                "description" => "How to Safely Change DB Relations in Live Laravel Project?",
                "url" => "https://www.youtube.com/watch?v=nRmoywPJRdM",
            ],
            [
                "title" => "Eager Loading and N+1 Query Problem (1)",
                "description" => "Relationships: Eager Loading",
                "url" => "https://laravel.com/docs/eloquent-relationships#eager-loading",
            ],
            [
                "title" => "Eager Loading and N+1 Query Problem (2)",
                "description" => "Laravel N+1 Query Detector: Don't Forget Eager Loading",
                "url" => "https://www.youtube.com/watch?v=MbN7BIcUnPA",
            ],
            [
                "title" => "Full Simple CRUD (1)",
                "description" => "Laravel Resource Controllers",
                "url" => "https://laravel.com/docs/controllers#resource-controllers",
            ],
            [
                "title" => "Full Simple CRUD (2)",
                "description" => "Simple Laravel CRUD with Resource Controllers",
                "url" => "https://www.digitalocean.com/community/tutorials/simple-laravel-crud-with-resource-controllers",
            ],
            [
                "title" => "Full Simple CRUD (3)",
                "description" => "Laravel Nested Resource Controllers: Two-Level Deep.",
                "url" => "https://www.youtube.com/watch?v=9R_9Xe3Fgnw",
            ],
            [
                "title" => "Full Simple CRUD (4)",
                "description" => "Junior Code Review: 5 Routes into Resource CRUD Controller.",
                "url" => "https://www.youtube.com/watch?v=J5WBTUr0QBE",
            ],
            [
                "title" => "Full Simple CRUD (5)",
                "description" => "Laravel Resource Controllers: Most Common Mistake People Make.",
                "url" => "https://www.youtube.com/watch?v=exIfecOZd2E",
            ],
            [
                "title" => "Forms, Validation and Form Requests (1)",
                "description" => "Test Your Laravel Validation Skills: Complete 9 Tasks",
                "url" => "https://www.youtube.com/watch?v=3ihjumeOMV4",
            ],
            [
                "title" => "Forms, Validation and Form Requests (2)",
                "description" => "Laravel Validation",
                "url" => "https://laravel.com/docs/validation",
            ],
            [
                "title" => "Forms, Validation and Form Requests (3)",
                "description" => "New in Laravel 6.13: Format Validation Error Field Name.",
                "url" => "https://www.youtube.com/watch?v=KD1SqLO58eE",
            ],
            [
                "title" => "Forms, Validation and Form Requests (4)",
                "description" => "Danger of Using request()->all(), and How to Protect ",
                "url" => "https://www.youtube.com/watch?v=QQS5oEOguRU",
            ],
            [
                "title" => "Forms, Validation and Form Requests (5)",
                "description" => "Laravel Validation Rules: In FormRequest, Controller or Model?",
                "url" => "https://www.youtube.com/watch?v=HihUzmG2h3w",
            ],
            [
                "title" => "Forms, Validation and Form Requests (6)",
                "description" => "Laravel Validation: HTML Link in Error Message?",
                "url" => "https://www.youtube.com/watch?v=_k4zwJIUPH0",
            ],
            [
                "title" => "Forms, Validation and Form Requests (7)",
                "description" => "Make Laravel Validation Messages More 'Human'",
                "url" => "https://www.youtube.com/watch?v=KJbwEwl2D4o",
            ],
            [
                "title" => "Forms, Validation and Form Requests (8)",
                "description" => "Laravel Validation: 12 Less-Known Tips in 13 Minutes.",
                "url" => "https://www.youtube.com/watch?v=ckhllNh79gM",
            ],
            [
                "title" => "Forms, Validation and Form Requests (9)",
                "description" => "New in Laravel 8.39: Password Rules with Checking Data Leaks.",
                "url" => "https://www.youtube.com/watch?v=5q_P7QUssoc",
            ],
            [
                "title" => "Forms, Validation and Form Requests (10)",
                "description" => "How to 'Hack' Laravel: 3 Examples of Non-Validated Input.",
                "url" => "https://www.youtube.com/watch?v=eLTs_MnhzYw",
            ],
            [
                "title" => "Forms, Validation and Form Requests (11)",
                "description" => "Laravel Custom Validation Messages: Override the Defaults.",
                "url" => "https://www.youtube.com/watch?v=LUGlkXi52VY",
            ],
            [
                "title" => "Forms, Validation and Form Requests (12)",
                "description" => "New in Laravel 8.52: Unique Validation Without Trashed.",
                "url" => "https://www.youtube.com/watch?v=kc8Ks3ElGmM",
            ],
            [
                "title" => "Forms, Validation and Form Requests (13)",
                "description" => "Laravel Checkout: Database Transactions and Validation.",
                "url" => "https://www.youtube.com/watch?v=LuxFql2CDyg",
            ],
            [
                "title" => "Forms, Validation and Form Requests (14)",
                "description" => "New in Laravel 8.55: Route WithTrashed and Rule::when Conditional Validation.",
                "url" => "https://www.youtube.com/watch?v=kAEMFXLPjS4",
            ],
            [
                "title" => "Forms, Validation and Form Requests (15)",
                "description" => "One Reason to ALWAYS use Form Requests for Validation.",
                "url" => "https://www.youtube.com/watch?v=3P2uNeY9Azs",
            ],
            [
                "title" => "Forms, Validation and Form Requests (16)",
                "description" => "Laravel Form Request: Store/Update - Same or Separate Class?",
                "url" => "https://www.youtube.com/watch?v=YK8GZmuf8_0",
            ],
            [
                "title" => "File Uploads and Storage Folder Basics (1)",
                "description" => "Test Your Laravel File Upload Skills: Complete 7 Tasks?",
                "url" => "https://www.youtube.com/watch?v=_SrQRnOx3q8",
            ],
            [
                "title" => "File Uploads and Storage Folder Basics (2)",
                "description" => "Filesystem: File Uploads",
                "url" => "https://laravel.com/docs/filesystem#file-uploads",
            ],
            [
                "title" => "File Uploads and Storage Folder Basics (3)",
                "description" => "Laravel: How to Upload File During User Registration",
                "url" => "https://www.youtube.com/watch?v=xyQT2pnv_4E",
            ],
            [
                "title" => "File Uploads and Storage Folder Basics (4)",
                "description" => "Group Code Review: Laravel Image Upload & Resize",
                "url" => "https://www.youtube.com/watch?v=Xh4kYgsYguc&t=5s",
            ],
            [
                "title" => "Table Pagination",
                "description" => "Database Pagination",
                "url" => "https://laravel.com/docs/pagination",
            ],
            [
                "title" => "Beginner Demo-Project",
                "description" => "Personal Blog Project",
                "url" => "https://github.com/LaravelDaily/Laravel-Roadmap-Beginner-Challenge",
            ],
        ];

    }

    private function advancedBeginnerData()
    {
        return [
            [
                "title" => "Advanced Beginner Level",
                "description" => "",
                "url" => "",
            ],
            [
                "title" => "Routing Advanced (1)",
                "description" => "Laravel: 8 Tips for Advanced Routing.",
                "url" => "https://www.youtube.com/watch?v=_BIhuX8owTo",
            ],
            [
                "title" => "Routing Advanced (2)",
                "description" => "Laravel Routes: Grouping and Other 'Tricks' - Challenge Result.",
                "url" => "https://www.youtube.com/watch?v=Q3yPNimibGA",
            ],
            [
                "title" => "Route Model Binding (1)",
                "description" => "Route Model Binding",
                "url" => "https://laravel.com/docs/routing#route-model-binding",
            ],
            [
                "title" => "Route Model Binding (2)",
                "description" => "Laravel Route Model Binding: All You Need To Know",
                "url" => "https://www.youtube.com/watch?v=6dEfxGLgevM",
            ],
            [
                "title" => "Route Model Binding (3)",
                "description" => "Laravel Route Model Binding: Default, Custom and Laravel 7.",
                "url" => "https://www.youtube.com/watch?v=XyyGG5qIWoQ",
            ],
            [
                "title" => "Route Redirect",
                "description" => "Redirect Routes",
                "url" => "https://laravel.com/docs/routing#redirect-routes",
            ],
            [
                "title" => "Middleware",
                "description" => "Defining Middleware.",
                "url" => "https://laravel.com/docs/middleware#defining-middleware",
            ],
            [
                "title" => "Database Seeders and Factories (1)",
                "description" => "Database: Seeding.",
                "url" => "https://laravel.com/docs/seeding",
            ],
            [
                "title" => "Database Seeders and Factories (2)",
                "description" => "Defining Model Factories.",
                "url" => "https://laravel.com/docs/eloquent-factories#defining-model-factories",
            ],
            [
                "title" => "Database Seeders and Factories (3)",
                "description" => "Laravel 8: Database Seeds with Relationships.",
                "url" => "https://www.youtube.com/watch?v=nUKfqqCjA2I",
            ],
            [
                "title" => "Database Seeders and Factories (4)",
                "description" => "Code Review: Optimize Seeds and Eloquent Queries.",
                "url" => "https://www.youtube.com/watch?v=pJe1OUDCOmY",
            ],
            [
                "title" => "Database Seeders and Factories (5)",
                "description" => "How to Create Admin User in Laravel: Tinker or Seeds?",
                "url" => "https://www.youtube.com/watch?v=k9yfGtk1ad4",
            ],
            [
                "title" => "Database Seeders and Factories (6)",
                "description" => "Live-coding: Seeds and Factories in Laravel 8 (free lesson from my course).",
                "url" => "https://www.youtube.com/watch?v=qeT0pJJ_GOs",
            ],
            [
                "title" => "Database Seeders and Factories (7)",
                "description" => "Laravel: How to Seed New Data When Project is Live?",
                "url" => "https://www.youtube.com/watch?v=2wZo54IjtKU",
            ],
            [
                "title" => "Database Seeders and Factories (8)",
                "description" => "Laravel Factories: Generate and Re-use Fake Records.",
                "url" => "https://www.youtube.com/watch?v=MHBDUJ51Pqs",
            ],
            [
                "title" => "Database Seeders and Factories (9)",
                "description" => "Seeding 50k DB Rows in Laravel: Create, Insert or Chunk?",
                "url" => "https://www.youtube.com/watch?v=sAjLREMr-9k",
            ],
            [
                "title" => "Eloquent Query Scopes (1)",
                "description" => "Eloquent: Query Scopes.",
                "url" => "https://laravel.com/docs/eloquent#query-scopes",
            ],
            [
                "title" => "Eloquent Query Scopes (2)",
                "description" => "Same Eloquent Where Condition? Refactor into Local Scopes.",
                "url" => "https://www.youtube.com/watch?v=90xGUIuZsHE",
            ],
            [
                "title" => "Polymorphic relationships (1)",
                "description" => "Polymorphic Relationships.",
                "url" => "https://laravel.com/docs/eloquent-relationships#polymorphic-relationships",
            ],
            [
                "title" => "Polymorphic relationships (2)",
                "description" => "Laravel.io Portal: Polymorphic Relations Example.",
                "url" => "https://www.youtube.com/watch?v=EjJaNGW7vAg",
            ],
            [
                "title" => "Eloquent Accessors and Mutators",
                "description" => "Accessors & Mutators.",
                "url" => "https://laravel.com/docs/eloquent-mutators#accessors-and-mutators",
            ],
            [
                "title" => "Eloquent Collections (1)",
                "description" => "Eloquent Collections.",
                "url" => "https://laravel.com/docs/eloquent-collections",
            ],
            [
                "title" => "Eloquent Collections (2)",
                "description" => "General Laravel Collections.",
                "url" => "https://laravel.com/docs/collections",
            ],
            [
                "title" => "Soft Deletes",
                "description" => "Soft Deleting.",
                "url" => "https://laravel.com/docs/eloquent#soft-deleting",
            ],
            [
                "title" => "Auth Advanced (1)",
                "description" => "Authorization",
                "url" => "https://laravel.com/docs/authorization",
            ],
            [
                "title" => "Auth Advanced (2)",
                "description" => "Laravel Roles and Permissions: All CORE Things You Need To Know",
                "url" => "https://www.youtube.com/watch?v=kZOgH3-0Bko",
            ],
            [
                "title" => "Auth Advanced (3)",
                "description" => "Laravel: Separate Admin/User Areas - Designs, Routes, Permissions.",
                "url" => "https://www.youtube.com/watch?v=tafzPLRP92I&t=280s",
            ],
            [
                "title" => "Auth Advanced (4)",
                "description" => "Laravel Roles/Permissions: Users in Organizations/Teams.",
                "url" => "https://www.youtube.com/watch?v=oOLKwPfMIYU",
            ],
            [
                "title" => "Authorization (1)",
                "description" => "Spatie Laravel Permission: Example Project Review",
                "url" => "https://www.youtube.com/watch?v=NgToi0uiMNQ",
            ],
            [
                "title" => "Authorization (2)",
                "description" => "Two Best Laravel Packages to Manage Roles/Permissions",
                "url" => "https://laravel-news.com/two-best-roles-permissions-packages",
            ],
            [
                "title" => "Authorization (3) - Spatie Permission",
                "description" => "spatie/laravel-permission.",
                "url" => "https://github.com/spatie/laravel-permission",
            ],
            [
                "title" => "Authorization (4) - Bouncer",
                "description" => "JosephSilber/bouncer.",
                "url" => "https://github.com/JosephSilber/bouncer",
            ],
            [
                "title" => "Authentication: Email Verification (1)",
                "description" => "Email Verification.",
                "url" => "https://laravel.com/docs/verification",
            ],
            [
                "title" => "Authentication: Email Verification (2)",
                "description" => "How to Translate/Customize Laravel Auth Default Emails.",
                "url" => "https://www.youtube.com/watch?v=c01k5Zo_CuI",
            ],
            [
                "title" => "File Uploads Advanced",
                "description" => "File Uploads in Laravel.",
                "url" => "https://laraveldaily.com/course/laravel-file-uploads?utm_source=github&utm_campaign=roadmap",
            ],
            [
                "title" => "Drivers and Disks, Example of Amazon S3 (1)",
                "description" => "File Storage.",
                "url" => "https://laravel.com/docs/filesystem",
            ],
            [
                "title" => "Drivers and Disks, Example of Amazon S3 (2)",
                "description" => "Laravel: How to Upload Files to Amazon S3.",
                "url" => "https://www.youtube.com/watch?v=xZQM9q_QxMA",
            ],
            [
                "title" => "Extra Packages (1) -Spatie",
                "description" => "spatie/laravel-medialibrary",
                "url" => "https://github.com/spatie/laravel-medialibrary",
            ],
            [
                "title" => "Extra Packages (2) - Intervention Image",
                "description" => "intervention/image",
                "url" => "https://github.com/Intervention/image",
            ],
            [
                "title" => "Extra Packages (3) - Medialibrary",
                "description" => "Spatie Media Library Pro: Laravel File Uploads with Great UX [REVIEW].",
                "url" => "https://www.youtube.com/watch?v=oqW6vlJgXYE",
            ],
            [
                "title" => "Extra Packages (4) - FilePond",
                "description" => "Laravel File Upload with FilePond: Step-by-Step.",
                "url" => "https://www.youtube.com/watch?v=GRXaCfS1qj0",
            ],
            // *********
            [
                "title" => "API Basics (1)",
                "description" => "How to Create Laravel API.",
                "url" => "https://laraveldaily.com/course/laravel-api?utm_source=github&utm_campaign=roadmap",
            ],
            [
                "title" => "API Basics (2)",
                "description" => "Create Model with API Controller - in one Artisan Command.",
                "url" => "https://www.youtube.com/watch?v=DZw2wKzfRVU",
            ],
            [
                "title" => "API Basics (3)",
                "description" => "Laravel API: Be Careful When Doing Changes.",
                "url" => "https://www.youtube.com/watch?v=yXnIW4DkuHQ",
            ],
            [
                "title" => "API Routes and Controllers (1)",
                "description" => "API Resource Routes.",
                "url" => "https://laravel.com/docs/controllers#api-resource-routes",
            ],
            [
                "title" => "API Routes and Controllers (2)",
                "description" => "Default Route Files.",
                "url" => "https://laravel.com/docs/routing#the-default-route-files",
            ],
            [
                "title" => "API Routes and Controllers (3)",
                "description" => "Junior Code Review: Simple Laravel API - in 5 Different Ways.",
                "url" => "https://www.youtube.com/watch?v=MxQJlFUYO30",
            ],
            [
                "title" => "Working with API Clients: Postman or Alternatives",
                "description" => "Postman API Client.",
                "url" => "https://www.postman.com/product/api-client/",
            ],
            [
                "title" => "API Eloquent Resources (1)",
                "description" => "Eloquent: API Resources.",
                "url" => "https://laravel.com/docs/eloquent-resources",
            ],
            [
                "title" => "API Eloquent Resources (2)",
                "description" => "Laravel API Result: Add Fields with Map or Appends.",
                "url" => "https://www.youtube.com/watch?v=FNU3gYgiEgQ",
            ],
            [
                "title" => "API Auth with Sanctum (1)",
                "description" => "Laravel Sanctum.",
                "url" => "https://laravel.com/docs/sanctum",
            ],
            [
                "title" => "API Auth with Sanctum (2)",
                "description" => "Laravel API Auth with Sanctum and API Tokens",
                "url" => "https://www.youtube.com/watch?v=gyWLxpYWxFQ",
            ],
            [
                "title" => "API Auth with Sanctum (3)",
                "description" => "Example of Laravel Sanctum with API Tokens",
                "url" => "https://www.youtube.com/watch?v=Ql5z9TjXWLY",
            ],
            [
                "title" => "API Error Handling and Status Codes (1)",
                "description" => "Laravel API 404 Error: Customize Exception Message.",
                "url" => "https://www.youtube.com/watch?v=SlBJrLnyoMk",
            ],
            [
                "title" => "API Error Handling and Status Codes (2)",
                "description" => "HTTP Status Codes.",
                "url" => "https://httpstatuses.com/",
            ],
            [
                "title" => "Debugging Errors",
                "description" => "",
                "url" => "",
            ],
            [
                "title" => "Log Files in Laravel",
                "description" => "Logging.",
                "url" => "https://laravel.com/docs/logging",
            ],
            [
                "title" => "Try-Catch and Laravel Exceptions (1)",
                "description" => "Error Handling.",
                "url" => "https://laravel.com/docs/errors",
            ],
            [
                "title" => "Try-Catch and Laravel Exceptions (2)",
                "description" => "Exceptions in Laravel: Why/How to Use and Create Your Own.",
                "url" => "https://www.youtube.com/watch?v=RTTXZVIL6tw",
            ],
            [
                "title" => "Local Debugging Tools: Debugbar, Telescope, Ray (1)",
                "description" => "barryvdh/laravel-debugbar.",
                "url" => "https://github.com/barryvdh/laravel-debugbar",
            ],
            [
                "title" => "Local Debugging Tools: Debugbar, Telescope, Ray (2)",
                "description" => "Laravel Telescope.",
                "url" => "https://laravel.com/docs/telescope",
            ],
            [
                "title" => "Local Debugging Tools: Debugbar, Telescope, Ray (3)",
                "description" => "Spatie Ray (Premium Tool).",
                "url" => "https://myray.app/",
            ],
            [
                "title" => "Local Debugging Tools: Debugbar, Telescope, Ray (4)",
                "description" => "Debug Eloquent Queries from API: Laravel Telescope.",
                "url" => "https://www.youtube.com/watch?v=SR3RzIfeozI",
            ],
            [
                "title" => "Local Debugging Tools: Debugbar, Telescope, Ray (5)",
                "description" => "Spatie Ray: Laravel Debugging with Pleasure",
                "url" => "https://www.youtube.com/watch?v=n4pMxyAXeqY",
            ],
            [
                "title" => "Customizing Error Pages and Messages (1)",
                "description" => "Custom HTTP Error Pages.",
                "url" => "https://laravel.com/docs/errors#custom-http-error-pages",
            ],
            [
                "title" => "Customizing Error Pages and Messages (2)",
                "description" => "Laravel Error Pages: Change Text or Customize Layouts.",
                "url" => "https://www.youtube.com/watch?v=iMAFUi6Z57k",
            ],
            [
                "title" => "Customizing Error Pages and Messages (3)",
                "description" => "New in Laravel 8.26: Override 404 Page with Route Missing.",
                "url" => "https://www.youtube.com/watch?v=nvDCQDkcjN0",
            ],
            [
                "title" => "(optional) Third Party Bug Trackers: Bugsnag, Flare, Sentry, Rollbar (1)",
                "description" => "Bugsnag Laravel.",
                "url" => "https://docs.bugsnag.com/platforms/php/laravel/",
            ],
            [
                "title" => "(optional) Third Party Bug Trackers: Bugsnag, Flare, Sentry, Rollbar (2)",
                "description" => "Flare Homepage.",
                "url" => "https://flareapp.io/",
            ],
            [
                "title" => "(optional) Third Party Bug Trackers: Bugsnag, Flare, Sentry, Rollbar (3)",
                "description" => "Sentry Laravel",
                "url" => "https://docs.sentry.io/platforms/php/guides/laravel/",
            ],
            [
                "title" => "(optional) Third Party Bug Trackers: Bugsnag, Flare, Sentry, Rollbar (4)",
                "description" => "Rollbar Laravel",
                "url" => "https://docs.rollbar.com/docs/laravel",
            ],
            [
                "title" => "(optional) Third Party Bug Trackers: Bugsnag, Flare, Sentry, Rollbar (5)",
                "description" => "Bug Tracking in Laravel: Bugsnag vs Flare [Demo/Review].",
                "url" => "https://www.youtube.com/watch?v=88UqUXhWwGA",
            ],
            [
                "title" => "Sending Email",
                "description" => "Laravel: 3 Ways to Send a Welcome Email (Controller vs Observer vs Events).",
                "url" => "https://www.youtube.com/watch?v=ZWzH6SOzjhI",
            ],
            [
                "title" => "Mailables and Mail Facade",
                "description" => "Mail & Mailables.",
                "url" => "https://laravel.com/docs/mail",
            ],
            [
                "title" => "Configure Drivers/Services: Mailgun, Mailtrap, etc (1)",
                "description" => "How to Send Email From Laravel, and Why We Need 3rd Party Providers For It.",
                "url" => "https://laraveldaily.com/how-to-send-email-from-laravel-and-why-we-need-3rd-party-providers-for-it/",
            ],
            [
                "title" => "Configure Drivers/Services: Mailgun, Mailtrap, etc (2)",
                "description" => "Mail: Drivers Prerequisites.",
                "url" => "https://laravel.com/docs/mail#driver-prerequisites",
            ],
            [
                "title" => "Notifications System: Email, SMS, Slack, etc. (1)",
                "description" => "Notifications.",
                "url" => "https://laravel.com/docs/notifications",
            ],
            [
                "title" => "Notifications System: Email, SMS, Slack, etc. (2)",
                "description" => "Laravel Notifications: 'Database' Driver - Demo Project.",
                "url" => "https://www.youtube.com/watch?v=5DREuAvFnps",
            ],
            [
                "title" => "Automated Testing with PHPUnit",
                "description" => "PHPUnit in Laravel: Simple Example of Why/How to Test.",
                "url" => "https://www.youtube.com/watch?v=DRhhfy2sG1E",
            ],
            [
                "title" => "'Smoke' Tests to Check if Pages are Loading (1)",
                "description" => "Testing: Getting Started.",
                "url" => "https://laravel.com/docs/testing",
            ],
            [
                "title" => "\"Smoke\" Tests to Check if Pages are Loading (2)",
                "description" => "Testing Laravel: Course by Spatie.",
                "url" => "https://spatie.be/products/testing-laravel",
            ],
            [
                "title" => "\"Smoke\" Tests to Check if Pages are Loading (3)",
                "description" => "My Course: Laravel Testing For Beginners: PHPUnit, Pest, TDD.",
                "url" => "https://laraveldaily.com/course/laravel-testing?utm_source=github&utm_campaign=roadmap",
            ],
            [
                "title" => "\"Smoke\" Tests to Check if Pages are Loading (4)",
                "description" => "Laravel TDD in 'Live' Mode: Checkout Code Review.",
                "url" => "https://www.youtube.com/watch?v=5XywKLjCD3g",
            ],
            [
                "title" => "Configure Testing Database and Test CRUD Operations",
                "description" => "Database Testing.",
                "url" => "https://laravel.com/docs/database-testing",
            ],
            [
                "title" => "Deployment and Version Control (1)",
                "description" => "Git",
                "url" => "https://git-scm.com/",
            ],
            [
                "title" => "Deployment and Version Control (2)",
                "description" => "Git in Laravel. Part 1 - Branches: Main, Develop and Feature.",
                "url" => "https://www.youtube.com/watch?v=AmScEC-_72I",
            ],
            [
                "title" => "Deployment and Version Control (3)",
                "description" => "Git in Laravel. Part 2 - Conflicts and Better Pull Requests.",
                "url" => "https://www.youtube.com/watch?v=t020co_fROU",
            ],
            [
                "title" => "Deployment on Live Servers (1)",
                "description" => "Deployment",
                "url" => "https://laravel.com/docs/deployment",
            ],
            [
                "title" => "Deployment on Live Servers (2)",
                "description" => "How to Deploy Laravel Projects to Live Server: The Ultimate Guide.",
                "url" => "https://laraveldaily.com/how-to-deploy-laravel-projects-to-live-server-the-ultimate-guide/",
            ],
            [
                "title" => "Deployment on Live Servers (3)",
                "description" => "What Server is Needed to Deploy Laravel Projects.",
                "url" => "https://laraveldaily.com/what-server-is-needed-to-deploy-laravel-projects/",
            ],
            [
                "title" => "Deployment on Live Servers (4)",
                "description" => "How we Deploy Laravel: Branches, Staging Servers, Forge and Envoyer.",
                "url" => "https://www.youtube.com/watch?v=8DVuVftFZcQ",
            ],
            [
                "title" => "Advanced Beginner Demo-Project: Simple CRM",
                "description" => "CRM project.",
                "url" => "https://github.com/LaravelDaily/Laravel-Roadmap-Advanced-Beginner-Challenge",
            ],
        ];
    }

    private function midlevelData()
    {
        return [
            [
                "title" => "Mid Level",
                "description" => "",
                "url" => "",
            ],
            [
                "title" => "Route Caching",
                "description" => "Route Caching.",
                "url" => "https://laravel.com/docs/routing#route-caching",
            ],
            [
                "title" => "Rate Limiting",
                "description" => "Rate Limiting.",
                "url" => "https://laravel.com/docs/routing#rate-limiting",
            ],
            [
                "title" => "Invokable controllers",
                "description" => "Laravel: Create Public API with Cache and Rate Limits.",
                "url" => "https://laravel.com/docs/controllers#single-action-controllers",
            ],
            [
                "title" => "Database/Eloquent Extra Features",
                "description" => "",
                "url" => "",
            ],
            [
                "title" => "Model Observers (1)",
                "description" => "Eloquent Observers.",
                "url" => "https://laravel.com/docs/eloquent#observers",
            ],
            [
                "title" => "Model Observers (2)",
                "description" => "Laravel Model: Check if Any Field Was Changed.",
                "url" => "https://www.youtube.com/watch?v=_xluet13xxE",
            ],
            [
                "title" => "Model Observers (3)",
                "description" => "Eloquent Observers or Events Listeners? Which is Better?",
                "url" => "https://www.youtube.com/watch?v=DvoaU6cQQHM",
            ],
            [
                "title" => "Raw Database Queries",
                "description" => "Query Builder: Raw Expressions.",
                "url" => "https://laravel.com/docs/queries#raw-expressions",
            ],
            [
                "title" => "All Eloquent Features (1)",
                "description" => "All About Eloquent.",
                "url" => "https://laravel.com/docs/eloquent",
            ],
            [
                "title" => "All Eloquent Features (2)",
                "description" => "Eloquent: Expert Level.",
                "url" => "https://laraveldaily.teachable.com/p/laravel-eloquent-expert-level?utm_source=github&utm_campaign=roadmap",
            ],
            [
                "title" => "All Eloquent Features (3)",
                "description" => "20 Laravel Eloquent Tips and Tricks.",
                "url" => "https://laravel-news.com/eloquent-tips-tricks",
            ],
            [
                "title" => "All Eloquent Features (4)",
                "description" => "Laravel Collections: 5 Methods with Real Examples.",
                "url" => "https://www.youtube.com/watch?v=isAz2GduuA0",
            ],
            [
                "title" => "All Eloquent Features (5)",
                "description" => "Laravel Group Data: in Collections or in Eloquent Query?.",
                "url" => "https://www.youtube.com/watch?v=FhlVOIfjxbA",
            ],
            [
                "title" => "All Eloquent Features (6)",
                "description" => "Laravel Collections or Foreach? Shorter? More Readable?.",
                "url" => "https://www.youtube.com/watch?v=OTdLZJECIUE",
            ],
            [
                "title" => "All Eloquent Features (7)",
                "description" => "Check if Collection is Empty: isset(), empty() or !collection?.",
                "url" => "https://www.youtube.com/watch?v=vCZ2qsxm8JE",
            ],
            [
                "title" => "Various Extra Laravel Features",
                "description" => ".",
                "url" => "",
            ],
            [
                "title" => "Custom Blade Directives",
                "description" => "Extending Blade.",
                "url" => "https://laravel.com/docs/blade#extending-blade",
            ],
            [
                "title" => "Events and Listeners (1)",
                "description" => "Events and Listeners.",
                "url" => "https://laravel.com/docs/events",
            ],
            [
                "title" => "Events and Listeners (2)",
                "description" => "Laravel: 3 Ways to Send a Welcome Email (Controller vs Observer vs Events).",
                "url" => "https://www.youtube.com/watch?v=ZWzH6SOzjhI",
            ],
            [
                "title" => "Events and Listeners (3)",
                "description" => " Laravel: Why Observers and Event Listeners are 'Risky'.",
                "url" => "https://www.youtube.com/watch?v=A3bmLo77e5M",
            ],
            [
                "title" => "Laravel HTTP Client and Guzzle (1)",
                "description" => "HTTP Client.",
                "url" => "https://laravel.com/docs/http-client",
            ],
            [
                "title" => "Laravel HTTP Client and Guzzle (2)",
                "description" => "Laravel and External APIs: Get Data with HTTP Client.",
                "url" => "https://www.youtube.com/watch?v=oEDDZsmMLc0",
            ],
            [
                "title" => "Login with X: Laravel Socialite (2)",
                "description" => "Laravel Socialite.",
                "url" => "https://laravel.com/docs/socialite",
            ],
            [
                "title" => "Creating Artisan Commands (1)",
                "description" => "Writing Artisan Commands.",
                "url" => "https://laravel.com/docs/artisan#writing-commands",
            ],
            [
                "title" => "Creating Artisan Commands (2)",
                "description" => "How to Create Artisan Commands in Laravel.",
                "url" => "https://www.youtube.com/watch?v=-r3WnYy7g48",
            ],
            [
                "title" => "Task Scheduling (1)",
                "description" => "Task Scheduling.",
                "url" => "https://laravel.com/docs/scheduling",
            ],
            [
                "title" => "Task Scheduling (2)",
                "description" => "Laravel Task Scheduling: Run Artisan Command Hourly.",
                "url" => "https://www.youtube.com/watch?v=r-KrsQ0dN80",
            ],
            [
                "title" => "Caching (1)",
                "description" => "Cache.",
                "url" => "https://laravel.com/docs/cache",
            ],
            [
                "title" => "Caching (2)",
                "description" => "Cache Eloquent Query Results to Load Pages Instantly.",
                "url" => "https://www.youtube.com/watch?v=JhKngeE0XJA",
            ],
            [
                "title" => "Real-time: Broadcasting, Echo and Pusher",
                "description" => "Broadcasting.",
                "url" => "https://laravel.com/docs/broadcasting",
            ],
            [
                "title" => "Jobs and Queues",
                "description" => ".",
                "url" => "https://laraveldaily.com/course/laravel-queues?utm_source=github&utm_campaign=roadmap",
            ],
            [
                "title" => "Queueable Classes and Jobs",
                "description" => ".",
                "url" => "https://laravel.com/docs/queues#creating-jobs",
            ],
            [
                "title" => "Job Dispatching, Batching and Chaining",
                "description" => ".",
                "url" => "https://laravel.com/docs/queues#dispatching-jobs",
            ],
            [
                "title" => "Processing Failed Jobs",
                "description" => ".",
                "url" => "https://laravel.com/docs/queues#dealing-with-failed-jobs",
            ],
            [
                "title" => "Configuring Queues: Drivers, Redis, Supervisor",
                "description" => ".",
                "url" => "https://laravel.com/docs/queues#running-the-queue-worker",
            ],
            [
                "title" => "Laravel Horizon (optional, if you use Redis)",
                "description" => ".",
                "url" => "https://laravel.com/docs/horizon",
            ],
            [
                "title" => "API Advanced",
                "description" => ".",
                "url" => "",
            ],
            [
                "title" => "Upload Files via API",
                "description" => ".",
                "url" => "https://blog.quickadminpanel.com/laravel-api-how-to-upload-file-from-vue-js/",
            ],
            [
                "title" => "Generate API Documentation",
                "description" => ".",
                "url" => "https://blog.quickadminpanel.com/laravel-api-documentation-with-openapiswagger/",
            ],
            [
                "title" => "API Versioning",
                "description" => ".",
                "url" => "https://codimth.com/blog/web/laravel/versioning-your-rest-api-laravel",
            ],
            [
                "title" => "API with OAuth and Laravel Passport",
                "description" => ".",
                "url" => "https://laravel.com/docs/passport",
            ],
            [
                "title" => "Only-API Projects with Front-end like Vue.js / React.js",
                "description" => ".",
                "url" => "https://laraveldaily.com/course/vue-laravel-spa?utm_source=github&utm_campaign=roadmap",
            ],
            [
                "title" => "Only-API Projects with Mobile Apps",
                "description" => ".",
                "url" => "https://laraveldaily.com/course/flutter-laravel?utm_source=github&utm_campaign=roadmap",
            ],
            [
                "title" => "(optional) Starter Kits: Laravel Jetstream and Fortify",
                "description" => ".",
                "url" => "https://laraveldaily.teachable.com/p/laravel-jetstream-livewire-project?utm_source=github&utm_campaign=roadmap",
            ],
            [
                "title" => "Payments",
                "description" => "",
                "url" => "",
            ],
            [
                "title" => "Laravel Cashier with Stripe/Paddle",
                "description" => "Integrate subscription billing with Stripe or Paddle using Laravel Cashier.",
                "url" => "https://laravel.com/docs/billing",
            ],
            [
                "title" => "Custom Payment Providers: PayPal, Mollie, etc",
                "description" => "Explore custom payment integration with Laravel using providers like PayPal and Mollie.",
                "url" => "https://websolutionstuff.com/post/how-to-integrate-paypal-payment-gateway-in-laravel",
            ],
            [
                "title" => "Automated Testing Advanced",
                "description" => "",
                "url" => "",
            ],
            [
                "title" => "TDD: Test-Driven Development",
                "description" => "Learn about test-driven development (TDD) in Laravel.",
                "url" => "https://laracasts.com/series/build-a-laravel-app-with-tdd",
            ],
            [
                "title" => "Mocking",
                "description" => "Understand how to use mocking in Laravel tests.",
                "url" => "https://laravel.com/docs/mocking",
            ],
            [
                "title" => "(optional) Laravel Dusk",
                "description" => "Explore Laravel Dusk for browser testing.",
                "url" => "https://laravel.com/docs/dusk",
            ],
            [
                "title" => "Full-Text Search",
                "description" => "",
                "url" => "",
            ],
            [
                "title" => "Laravel Scout",
                "description" => "Utilize Laravel Scout for full-text search functionality.",
                "url" => "https://laravel.com/docs/scout",
            ],
            [
                "title" => "Drivers: ElasticSearch, Algolia or MeiliSearch",
                "description" => "Learn about different search drivers for Laravel Scout.",
                "url" => "https://laravel-news.com/explorer",
            ],
            [
                "title" => "Laravel Packages",
                "description" => "",
                "url" => "",
            ],
            [
                "title" => "Contributing to Packages, making Pull Requests",
                "description" => "Contribute to Laravel packages by making pull requests.",
                "url" => "https://www.youtube.com/watch?v=vEcT6JIFji0",
            ],
            [
                "title" => "Create Laravel Packages",
                "description" => "Learn how to develop and create your own Laravel packages.",
                "url" => "https://laravel.com/docs/packages",
            ],
        ];
    }

    private function seniorData()
    {
        return [
            [
                "title" => "Senior level ",
                "description" => "",
                "url" => "",
            ],
            [
                "title" => "PHP/Laravel Design Patterns",
                "description" => "Laravel Design Patterns - Bobby Bouwmann - Laracon EU 2018 Amsterdam",
                "url" => "https://www.youtube.com/watch?v=qpo5KG0vIyE",
            ],
            [
                "title" => "PHP/Laravel Design Patterns",
                "description" => "Laracasts: Design Patterns in PHP",
                "url" => "https://laracasts.com/series/design-patterns-in-php",
            ],
            [
                "title" => "PHP/Laravel Design Patterns",
                "description" => "Colin Decarlo - Design Patterns with Laravel [Laracon 2018]",
                "url" => "https://www.youtube.com/watch?v=e4ugSgGaCQ0",
            ],
            [
                "title" => "PHP/Laravel Design Patterns",
                "description" => "Matt Stauffer - Patterns That Pay Off [Laracon 2018]",
                "url" => "https://www.youtube.com/watch?v=enTb2E4vEos",
            ],
            [
                "title" => "PHP/Laravel Design Patterns",
                "description" => "Design Patterns in PHP",
                "url" => "https://refactoring.guru/design-patterns/php",
            ],
            [
                "title" => "PHP/Laravel Design Patterns",
                "description" => "Design Patterns for Humans",
                "url" => "https://github.com/kamranahmedse/design-patterns-for-humans",
            ],
            [
                "title" => "Creational Design Patterns",
                "description" => "Design Patterns PHP: Creational",
                "url" => "https://designpatternsphp.readthedocs.io/en/latest/Creational/README.html",
            ],
            [
                "title" => "Structural Design Patterns",
                "description" => "Design Patterns PHP: Structural",
                "url" => "https://designpatternsphp.readthedocs.io/en/latest/Structural/README.html",
            ],
            [
                "title" => "Behavioral Design Patterns",
                "description" => "Design Patterns PHP: Behavioral",
                "url" => "https://designpatternsphp.readthedocs.io/en/latest/Behavioral/README.html",
            ],
            [
                "title" => "SOLID Code",
                "description" => "SOLID Code in Laravel",
                "url" => "https://laraveldaily.com/course/solid-laravel?utm_source=github&utm_campaign=roadmap",
            ],
            [
                "title" => "SOLID Code",
                "description" => "Becoming a better developer by using the SOLID design principles by Katerina Trajchevska",
                "url" => "https://www.youtube.com/watch?v=rtmFCcjEgEw",
            ],
            [
                "title" => "SOLID Code",
                "description" => "Writing Maintainable Code: SOLID Principles Explained in PHP (Laravel)",
                "url" => "https://geekflare.com/php-solid-principles/",
            ],
            [
                "title" => "SOLID Code",
                "description" => "Laracasts: SOLID Principles in PHP",
                "url" => "https://laracasts.com/series/solid-principles-in-php",
            ],
            [
                "title" => "SOLID Code",
                "description" => "PHP Solid Principles [Playlist]",
                "url" => "https://www.youtube.com/watch?v=ARxZV8OZ8Cg&list=PLNuh5_K9dfQ3jMU-2C2jYRGe2iXJkpCZj",
            ],
            [
                "title" => "Scalable Code",
                "description" => "Scaling Laravel",
                "url" => "https://courses.serversforhackers.com/scaling-laravel",
            ],
            [
                "title" => "Scalable Code",
                "description" => "Enterprise Laravel by Matt Stauffer",
                "url" => "https://enterpriselaravel.com/",
            ],
            [
                "title" => "Scalable Code",
                "description" => "What the hell is scalable code anyway?",
                "url" => "https://blog.sarasarya.com/what-the-hell-is-scalable-code-anyway-f6626ad78227",
            ],
            [
                "title" => "Maintainable Code",
                "description" => "10+ Laravel Refactoring Examples",
                "url" => "https://laraveldaily.com/course/laravel-refactoring?utm_source=github&utm_campaign=roadmap",
            ],
            [
                "title" => "Maintainable Code",
                "description" => "How would you know if you've written readable and easily maintainable code? [forum thread]",
                "url" => "https://softwareengineering.stackexchange.com/questions/141005/how-would-you-know-if-youve-written-readable-and-easily-maintainable-code",
            ],
            [
                "title" => "Maintainable Code",
                "description" => "Crafting maintainable Laravel applications",
                "url" => "https://jasonmccreary.me/articles/crafting-maintainable-laravel-applications/",
            ],
            [
                "title" => "Maintainable Code",
                "description" => "7 Golden Rules of Clean, Simple and Maintainable Code",
                "url" => "https://shhetri.github.io/clean-code/#/",
            ],
            [
                "title" => "Best Practices and Standards",
                "description" => "Repository: alexeymezenin / laravel-best-practices",
                "url" => "https://github.com/alexeymezenin/laravel-best-practices",
            ],
            [
                "title" => "Best Practices and Standards",
                "description" => "PHP: The Right Way",
                "url" => "https://phptherightway.com/",
            ],
            [
                "title" => "Best Practices and Standards",
                "description" => "Reddit: What are your Laravel best practices?",
                "url" => "https://www.reddit.com/r/laravel/comments/f34t86/what_are_your_laravel_best_practices/",
            ],
            [
                "title" => "Large Database Structures",
                "description" => "How to Structure Databases in Laravel",
                "url" => "https://laraveldaily.com/course/laravel-database-structure?utm_source=github&utm_campaign=roadmap",
            ],
            [
                "title" => "Large Database Structures",
                "description" => "GraphQL in Laravel From Scratch",
                "url" => "https://laraveldaily.com/course/graphql-laravel?utm_source=github&utm_campaign=roadmap",
            ],
            [
                "title" => "NoSQL Solutions",
                "description" => "MongoDB and Laravel Integration",
                "url" => "https://www.mongodb.com/compatibility/mongodb-laravel-intergration",
            ],
            [
                "title" => "NoSQL Solutions",
                "description" => "MongoDB + Laravel = Love — When to use NoSQL",
                "url" => "https://faun.pub/when-to-use-nosql-getting-started-with-mongodb-in-laravel-f5376ceaf545",
            ],
            [
                "title" => "Eloquent/SQL Query Optimization",
                "description" => "Better Eloquent Performance",
                "url" => "https://laraveldaily.com/course/eloquent-performance?utm_source=github&utm_campaign=roadmap",
            ],
            [
                "title" => "Eloquent/SQL Query Optimization",
                "description" => "18 Tips to optimize laravel database queries",
                "url" => "https://dudi.dev/optimize-laravel-database-queries/",
            ],
            [
                "title" => "Eloquent/SQL Query Optimization",
                "description" => "Optimizing Laravel Part 2: Improving Query Performance with Database Indexing",
                "url" => "https://deliciousbrains.com/optimizing-laravel-database-indexing-performance/",
            ],
            [
                "title" => "Eloquent/SQL Query Optimization",
                "description" => "Eloquent Performance Patterns",
                "url" => "https://eloquent-course.reinink.ca/",
            ],
            [
                "title" => "Scaling to Multiple Databases",
                "description" => "Scaling Laravel App with Multiple Databases",
                "url" => "https://devdojo.com/bobbyiliev/scaling-laravel-app-with-multiple-databases",
            ],
            [
                "title" => "Scaling to Multiple Databases",
                "description" => "Multiple DB Connections in Laravel",
                "url" => "https://fideloper.com/laravel-multiple-database-connections",
            ],
            [
                "title" => "Stability and Zero-Downtime Deployments",
                "description" => "Laravel Deployer",
                "url" => "https://github.com/deployphp/deployer",
            ],
            [
                "title" => "Stability and Zero-Downtime Deployments",
                "description" => "Envoyer - Zero Downtime PHP Deployment",
                "url" => "https://envoyer.io/",
            ],
            [
                "title" => "Performance Optimization and Caching",
                "description" => "Performant Laravel",
                "url" => "https://serversforhackers.com/laravel-perf",
            ],
            [
                "title" => "Performance Optimization and Caching",
                "description" => "The Ultimate Performance Checklist For Laravel Apps",
                "url" => "https://laravel-news.com/performance-checklist",
            ],
            [
                "title" => "Performance Optimization and Caching",
                "description" => "How to Optimize PHP Laravel Web Application for High Performance?",
                "url" => "https://geekflare.com/laravel-optimization/",
            ],
            [
                "title" => "Writing Testable Code",
                "description" => "How to write testable code",
                "url" => "https://dev.to/ddarrko/how-to-write-more-testable-code-oi7",
            ],
            [
                "title" => "Writing Testable Code",
                "description" => "Refactoring towards testability",
                "url" => "https://madewithlove.com/blog/software-engineering/refactoring-untestable-code-towards-testability/",
            ],
            [
                "title" => "Continuous Integration and Continuous Delivery (CI/CD)",
                "description" => "How to create a CI/CD for a Laravel application using GitHub Actions",
                "url" => "https://blog.logrocket.com/how-to-create-a-ci-cd-for-a-laravel-application-using-github-actions/",
            ],
            [
                "title" => "Continuous Integration and Continuous Delivery (CI/CD)",
                "description" => "Configure Laravel 8 for CI/CD with Jenkins and GitHub — Part 1",
                "url" => "https://faun.pub/configure-laravel-8-for-ci-cd-with-jenkins-and-github-part-1-58b9be304292",
            ],
            [
                "title" => "Continuous Integration and Continuous Delivery (CI/CD)",
                "description" => "Build, Test, and Deploy Your Laravel Application With GitHub Actions",
                "url" => "https://www.twilio.com/blog/build-test-deploy-laravel-application-github-actions",
            ],
        ];

    }
}
