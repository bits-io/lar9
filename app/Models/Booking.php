<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Booking extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'bookings';
    protected $fillable = [
        'kode_pemesanan',
        'tanggal_pemesanan',
        'id_pemesanan',
        'kode_kursi',
        'id_rute',
        'tujuan',
        'tanggal_berangkat',
        'jam_cekin',
        'jam_berangkat',
        'total_bayar',
        'id_petugas',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
