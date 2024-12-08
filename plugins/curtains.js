import { Curtains } from "curtainsjs";

export default (context, inject) => {
  inject("curtains", Curtains); // Makes Curtains.js globally available as $curtains
};
