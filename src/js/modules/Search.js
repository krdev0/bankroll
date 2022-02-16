class CustomSearch {
  constructor() {
    console.log('Testing');
    this.openSearchIcon = document.querySelector(".js-open-search");
    this.closeSearchIcon = document.querySelector(".js-close-search");
    
    this.searchBar = document.querySelector(".js-search-bar");
    this.isSearchBarOpen = false;


    this.events();
  }

  events() {
    this.openSearchIcon.addEventListener("click", this.openSearchBar.bind(this));
    this.closeSearchIcon.addEventListener("click", this.closeSearchBar.bind(this));
  }

  // Methods
  openSearchBar() {
    this.searchBar.classList.remove("d-none");
  }
  
  closeSearchBar() {
    this.searchBar.classList.add("d-none");
  }
}

export default CustomSearch;
