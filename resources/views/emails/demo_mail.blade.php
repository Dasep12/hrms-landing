<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Request Demo</title>
</head>

<body style="margin:0; padding:0; background-color:#f4f7fb; font-family:Arial, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f7fb; padding:20px 0;">
        <tr>
            <td align="center">

                <!-- CARD -->
                <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:10px; overflow:hidden;">

                    <!-- HEADER -->
                    <tr>
                        <td style="background:#4f46e5; color:#ffffff; padding:20px; font-size:20px; font-weight:bold;">
                            🚀 Request Demo Baru
                        </td>
                    </tr>

                    <!-- CONTENT -->
                    <tr>
                        <td style="padding:20px;">

                            <!-- ROW -->
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="padding:10px 0; border-bottom:1px solid #eee; color:#6b7280;">
                                        Tanggal
                                    </td>
                                    <td align="right" style="padding:10px 0; border-bottom:1px solid #eee; font-weight:bold; color:#111;">
                                        {{ $data['tanggal'] }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:10px 0; border-bottom:1px solid #eee; color:#6b7280;">
                                        Jam
                                    </td>
                                    <td align="right" style="padding:10px 0; border-bottom:1px solid #eee; font-weight:bold;">
                                        {{ $data['jam'] }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:10px 0; border-bottom:1px solid #eee; color:#6b7280;">
                                        Nama
                                    </td>
                                    <td align="right" style="padding:10px 0; border-bottom:1px solid #eee; font-weight:bold;">
                                        {{ $data['nama'] }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:10px 0; border-bottom:1px solid #eee; color:#6b7280;">
                                        Email
                                    </td>
                                    <td align="right" style="padding:10px 0; border-bottom:1px solid #eee; font-weight:bold;">
                                        {{ $data['email'] }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:10px 0; border-bottom:1px solid #eee; color:#6b7280;">
                                        No HP
                                    </td>
                                    <td align="right" style="padding:10px 0; border-bottom:1px solid #eee; font-weight:bold;">
                                        {{ $data['hp'] }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:10px 0; border-bottom:1px solid #eee; color:#6b7280;">
                                        Perusahaan
                                    </td>
                                    <td align="right" style="padding:10px 0; border-bottom:1px solid #eee; font-weight:bold;">
                                        {{ $data['perusahaan'] }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:10px 0; color:#6b7280;">
                                        Jumlah Karyawan
                                    </td>
                                    <td align="right" style="padding:10px 0;">
                                        <span style="background:#e0e7ff; color:#4338ca; padding:5px 10px; border-radius:20px; font-size:12px; font-weight:bold;">
                                            {{ $data['jumlah_karyawan'] }}
                                        </span>
                                    </td>
                                </tr>

                            </table>

                        </td>
                    </tr>

                    <!-- FOOTER -->
                    <tr>
                        <td style="background:#f9fafb; padding:15px; text-align:center; font-size:12px; color:#999;">
                            © {{ date('Y') }} Request Demo BIT HRMS • Email otomatis
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>