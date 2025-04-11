<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\KiteDelivery\DeliveryRequest;
use App\Models\KiteDelivery\Dispute;
use App\Models\KiteDelivery\FlutterwaveBank;
use App\Models\KiteDelivery\Internals\GenericNotification;
use App\Models\KiteDelivery\KiteWallet;
use App\Models\KiteDelivery\KiteWalletTransaction;
use App\Models\KiteDelivery\User as KiteUser;
use App\Models\Platform\KiteSetting;
use App\Models\Referral\Referral;
use App\Models\User;
use App\Policies\Internals\GenericNotificationPolicy;
use App\Policies\KiteDelivery\DeliveryRequestPolicy;
use App\Policies\KiteDelivery\DisputePolicy;
use App\Policies\KiteDelivery\FlutterwaveBankPolicy;
use App\Policies\KiteDelivery\KiteWalletPolicy;
use App\Policies\KiteDelivery\KiteWalletTransactionPolicy;
use App\Policies\KiteDelivery\UserPolicy as KiteUserPolicy;
use App\Policies\PermissionPolicy;
use App\Policies\Platform\KiteSettingPolicy;
use App\Policies\Referral\ReferralPolicy;
use App\Policies\RolePolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // KiteUser::class => KiteUserPolicy::class,
        // KiteWallet::class => KiteWalletPolicy::class,
        // KiteWalletTransaction::class => KiteWalletTransactionPolicy::class,
        // DeliveryRequest::class => DeliveryRequestPolicy::class,
        // Dispute::class => DisputePolicy::class,
        // Referral::class => ReferralPolicy::class,
        // FlutterwaveBank::class => FlutterwaveBankPolicy::class,
        // KiteSetting::class => KiteSettingPolicy::class,
        // User::class => UserPolicy::class,
        // Permission::class => PermissionPolicy::class,
        // Role::class => RolePolicy::class,
        // GenericNotification::class => GenericNotificationPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
        foreach ($this->policies as $model => $policy) {
            $permissions = [
                'read',
                'create',
                'update',
                'delete',
                'restore',
                'force-delete',
            ];

            // Loop through each permission and check if it exists

            // foreach ($permissions as $permission) {
            //     $permissionName = $permission.'-'.Str::lower(Str::kebab(class_basename($model)));

            //     if (! Permission::where('name', $permissionName)->exists()) {
            //         // Permission doesn't exist, so we create it
            //         Permission::create(['name' => $permissionName]);

            //         Log::info("Created missing permission: {$permissionName}");
            //     }
            // }
        }

        Gate::before(function ($user, $ability) {
            return $user->hasRole('Admin') ? true : null;
        });
    }
}
