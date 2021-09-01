<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 18,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 19,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 20,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 21,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 22,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 23,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 24,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 25,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 26,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 27,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 28,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 29,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 30,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 31,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 32,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 33,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 34,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 35,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 36,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 37,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 38,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 39,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 40,
                'title' => 'services_management_access',
            ],
            [
                'id'    => 41,
                'title' => 'service_create',
            ],
            [
                'id'    => 42,
                'title' => 'service_edit',
            ],
            [
                'id'    => 43,
                'title' => 'service_show',
            ],
            [
                'id'    => 44,
                'title' => 'service_delete',
            ],
            [
                'id'    => 45,
                'title' => 'service_access',
            ],
            [
                'id'    => 46,
                'title' => 'service_offered_by_create',
            ],
            [
                'id'    => 47,
                'title' => 'service_offered_by_edit',
            ],
            [
                'id'    => 48,
                'title' => 'service_offered_by_show',
            ],
            [
                'id'    => 49,
                'title' => 'service_offered_by_delete',
            ],
            [
                'id'    => 50,
                'title' => 'service_offered_by_access',
            ],
            [
                'id'    => 51,
                'title' => 'system_setting_access',
            ],
            [
                'id'    => 52,
                'title' => 'about_us_page_create',
            ],
            [
                'id'    => 53,
                'title' => 'about_us_page_edit',
            ],
            [
                'id'    => 54,
                'title' => 'about_us_page_show',
            ],
            [
                'id'    => 55,
                'title' => 'about_us_page_delete',
            ],
            [
                'id'    => 56,
                'title' => 'about_us_page_access',
            ],
            [
                'id'    => 57,
                'title' => 'booking_show',
            ],
            [
                'id'    => 58,
                'title' => 'booking_access',
            ],
            [
                'id'    => 59,
                'title' => 'blog_create',
            ],
            [
                'id'    => 60,
                'title' => 'blog_edit',
            ],
            [
                'id'    => 61,
                'title' => 'blog_show',
            ],
            [
                'id'    => 62,
                'title' => 'blog_delete',
            ],
            [
                'id'    => 63,
                'title' => 'blog_access',
            ],
            [
                'id'    => 64,
                'title' => 'gallery_create',
            ],
            [
                'id'    => 65,
                'title' => 'gallery_edit',
            ],
            [
                'id'    => 66,
                'title' => 'gallery_show',
            ],
            [
                'id'    => 67,
                'title' => 'gallery_delete',
            ],
            [
                'id'    => 68,
                'title' => 'gallery_access',
            ],
            [
                'id'    => 69,
                'title' => 'slider_create',
            ],
            [
                'id'    => 70,
                'title' => 'slider_edit',
            ],
            [
                'id'    => 71,
                'title' => 'slider_show',
            ],
            [
                'id'    => 72,
                'title' => 'slider_delete',
            ],
            [
                'id'    => 73,
                'title' => 'slider_access',
            ],
            [
                'id'    => 74,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
