<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{asset('admin/assets/img/profile.jpg')}}" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            Văn Long
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">Thông tin của tôi</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Sủa thông tin</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Cài đặt</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item">
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                </li>
                <li class="nav-item active">
                    <a data-toggle="collapse" href="#base"  aria-expanded="false">
                        <i class="fas fa-layer-group"></i>
                        <p>Sở hữu trí tuệ</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse show" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{asset('/admin/category_posts')}}">
                                    <span class="sub-item">Danh mục</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{asset('/admin/posts')}}">
                                    <span class="sub-item">Bài viết</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{asset('/admin/comments')}}">
                                    <span class="sub-item">Bình luận</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>