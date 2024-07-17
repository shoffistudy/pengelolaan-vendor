<!-- namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama_perusahaan' => 'required|string|max:255',
            'alamat_perusahaan' => 'required|string|max:255',
            'npwp_perusahaan' => 'required|digits:15',
            'dokumen_npwp' => 'required|file|mimes:pdf|max:2048',
            'kategori_vendor' => 'required|string|max:255',
            'nomor_perusahaan' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $dokumenNpwpPath = $request->file('dokumen_npwp')->store('npwp_documents');

        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Vendor::create([
            'user_id' => $user->id,
            'nama_perusahaan' => $request->nama_perusahaan,
            'alamat_perusahaan' => $request->alamat_perusahaan,
            'npwp_perusahaan' => $request->npwp_perusahaan,
            'dokumen_npwp' => $dokumenNpwpPath,
            'kategori_vendor' => $request->kategori_vendor,
            'nomor_perusahaan' => $request->nomor_perusahaan,
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }
} -->
