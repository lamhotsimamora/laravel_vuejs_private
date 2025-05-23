<div class="navbar bg-base-100 shadow-sm">
    <div class="flex-1">
        <a href="." class="btn btn-ghost text-xl">Home</a>
    </div>
    <div class="flex gap-2">
        <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full">
                    <img alt="Tailwind CSS Navbar component"
                        src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                </div>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                <li>
                    <a href="./barang" class="justify-between">
                        Barang
                        <span class="badge"></span>
                    </a>
                </li>
                 <li>
                    <a href="./satuan" class="justify-between">
                        Satuan
                        <span class="badge"></span>
                    </a>
                </li>
                 <li>
                    <a href="./jenis" class="justify-between">
                        Jenis
                        <span class="badge"></span>
                    </a>
                </li>

                <li><a href="/logout" style="color: red" @click="logout">Logout</a></li>
            </ul>
        </div>
    </div>
</div>
